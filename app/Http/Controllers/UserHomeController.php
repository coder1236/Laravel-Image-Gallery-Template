<?php

namespace App\Http\Controllers;

use App\ImageManager;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;

class UserHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $image = $this->get_random_image(array());
        $data = array();
        $data['randomimage'] = $image;
        $data['ratedimage'] = \DB::table('images')
            ->where('email', auth()->user()->email)
            ->get();

        return view('user.home', $data);
    }

    private function get_random_image()
    {
        $images = ImageManager::where('email', auth()->user()->email)
            ->get()->toArray();
        if(count($images) > 0){
            return Arr::random($images);
        }
        else
            return array();
    }
    
    public function get_image(Request $request) {
        $email = $request->input("email");
        $inappropriated = $request->input("inappropriated");

        $table = \DB::table('images');
        if($email === NULL)
            $email = auth()->user()->email;
        
        if($inappropriated != NULL)
        {
            $image = $table
                ->where('is_inappropriated', $inappropriated)
                ->get();
            return $image;
        }

        $image = $table
            ->where('email', $email)
            ->get();
        return $image;
    }
        //Action Get Random Image
    

    public function getRandomImage(Request $request)
    {
        if($request->input('ignored_ids') !== null){
            $images = ImageManager::whereNotIn('id', $request->input('ignored_ids'))->where('email', auth()->user()->email)
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

    public function remove_image(Request $request)
    {
        $id = $request->input('id');
        $image = ImageManager::where('id', $id)
            ->get()->toArray()[0];
        // var_dump($image['realimage_path']);//realimage_path   optimage_path
        // var_dump($image['optimage_path']);//realimage_path   optimage_path
        $success = true;
        try {
            if (! File::delete($image['realimage_path']) && ! File::delete($image['optimage_path'])) {
                $success = false;
            }
        } catch (FileNotFoundException $e) {
            $success = false;
        }
        // var_dump($success);
        // die();
        ImageManager::where('id',$id)->delete();
        return response()->json(['result'=>'SUCCESS']);
    }
}
