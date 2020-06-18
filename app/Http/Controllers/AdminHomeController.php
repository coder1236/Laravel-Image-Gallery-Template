<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ImageManager;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function index()
    {
        $data = [];
        $data['ratedimage'] = \DB::table('images')
            ->get();

        $data['users'] = User::whereNotIn('is_admin', [1])
            ->get()
            ->toArray();
        return view('admin.home', $data);
    }

    public function remove_user(Request $request)
    {
        $id = $request->input("id");
        if($id !== NULL && $id !== '')
        {
            User::where('id', $id)->delete();
            return response()->json(['error'=>NULL]);
        }else
        {
            return response()->json(['error'=>'ERROR']);
        }
    }

    public function unflag_image(Request $request) 
    {
        $id = $request->input('id');
        ImageManager::where('id',$id)->update(['is_inappropriated'=> '0']);
        return response()->json(['result'=>'SUCCESS']);
    }
}
