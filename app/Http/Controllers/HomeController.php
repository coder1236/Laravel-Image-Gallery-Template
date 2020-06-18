<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\ImageManager;

class HomeController extends Controller
{
    //Action
    public function index()
    {
        $image = $this->get_random_image(array());

        $data = [];
        $data['randomimage'] = $image;
        $data['singular'] = Config::get("app.singular");
        $data['plural'] = Config::get("app.plural");
        $data['abbreviated'] = Config::get("app.abbreviated");

        return view('home', $data);
    }

    public function getPreviewImages(Request $request)
    {
        $loaded_cnt = 0;
        if($request->input("loaded_cnt") !== null)
            $loaded_cnt = (int)($request->input("loaded_cnt"));

        $data = [];
        $data['ratedimage'] = \DB::table('images')
            ->offset($loaded_cnt)
            ->limit($loaded_cnt  + 30)
            ->get();
        $data['loaded_cnt'] = $loaded_cnt;
        return response()->json($data);
    }
    
    //Action Get Random Image
    public function getRandomImage(Request $request)
    {
        if($request->input('ignored_ids') !== null){
            $images = ImageManager::whereNotIn('id', $request->input('ignored_ids'))
                        ->get()->toArray();
            if(count($images) > 0)
               return response()->json(['image'=>Arr::random($images),'error'=>null]);
            else
                return response()->json(['image'=>array(),'error'=>'There is no image']);
        }
        else{
            $images = ImageManager::get()->toArray();
            if(count($images) > 0)
                return response()->json(['image'=>Arr::random($images),'error'=>null]);
            else
                return response()->json(['image'=>array(),'error'=>'There is no image']);
        }
        
        return response()->json(['image'=>array(),'error'=>'There is no image.']);
    }

    private function get_random_image($ignored_ids)
    {
        $images = ImageManager::whereNotIn('id', $ignored_ids)
                    ->get()->toArray();
        if(count($images) > 0){
            return Arr::random($images);
        }
        else
            return array();
    }

    public function updateScore(Request $request)
    {
        $image = ImageManager::find($request->input('id'));
        $image->scores += $request->input('score');
        $image->save();
    }

    public function set_inappropriate(Request $request)
    {
        $image = ImageManager::find($request->input('id'));
        $image->is_inappropriated = 1;
        $image->save();
    }
}
