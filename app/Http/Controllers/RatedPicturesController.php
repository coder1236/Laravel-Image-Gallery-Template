<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageManager;

class RatedPicturesController extends Controller
{
    //

    public function index()
    {

        return view('ratedpictures');
    }
    //POST AJAX
    public function getPictures(Request $request)
    {
        return response()->json(\DB::table('rated_images')
        ->offset($request->input('start_index'))
        ->limit($request->input('count'))
        ->get());
    }

}   
