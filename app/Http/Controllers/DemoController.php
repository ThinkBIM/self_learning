<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;

class DemoController extends Controller
{
    //
    public function demo()
    {
        Redirect::action();
    }
}
