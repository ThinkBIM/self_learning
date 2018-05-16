<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UploadController extends Controller
{
    //
    public function index()
    {
        $request = new Request();
//        $request = new UploadedFile();
        dd($request);
        dd($request->file('picture'));
    }
}
