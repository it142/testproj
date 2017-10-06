<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function upload(){

        Input::hasFile('filetest');
        // $file = $request->file('photo');
        if($request->hasFile('filetest')){
            echo "Here is the photo that you uploaded.";
            $file = $request->file('filetest');
            $file->move('uploads', $file->getClientOriginalName());
            echo '<img src="uploads/' .  $file->getClientOriginalName() . '" />';
        }
        else echo "No file was uploaded";

        return view('upload');

    }
}

