<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\ImageManager;

class AjaxImageUploadController extends Controller
{
    //

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function ajaxImageUploadPost(Request $request)
    {
      $validator = Validator::make($request->all(), [
        'image' => 'required|image|mimes:jpeg,png,jpg',
        'title' => 'required',
      ]);

      if ($validator->passes()) {
        $input = $request->all();
        $image_name = time().'.'.$request->image->extension();
        $input['email'] = auth()->user()->email;
        $input['title'] = $request->title;
        $input['realimage_path'] = public_path('images/'.$image_name);
        $input['optimage_path'] = public_path('images/optimized/'.$image_name);
        $input['realimage_url'] = asset('images/'.$image_name);
        $input['optimage_url'] = asset('images/optimized/'.$image_name);
        $input['scores'] = '0';
        // $input['uploader'] = Auth::user()->email;
        $input['uploader'] = '';
        $input['is_inappropriated'] = '0';

        $request->image->move(public_path('images'), $image_name);
        // $request->image->move(public_path('images/optimized'), $image_name);

        ImageManager::create($input);

        return response()->json(['success'=>'done','filename'=>$request->title]);
      }
  
      return response()->json(['error'=>$validator->errors()->all()]);
    }

    
}
