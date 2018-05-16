<?php

namespace App\Http\Controllers;


use App\Admin;
use App\HgAdmin;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class Test extends Controller
{
    //
    public function index()
    {
        $data = [
            'name'  => 1,
            'title' => '你好',
        ];

        return view('welcome', $data);
    }

    public function test()
    {
//        $admin = new HgAdmin();
//        $admin->nickname = '1111';
//        $admin->save();
        $userInfo = HgAdmin::find(6);
        $userInfo->delete();
//        dd($userInfo);
//        dd($url);
//        $user = DB::table('hg_admin')->get();
//        dd($user);

//        return view($data);
    }

    public function createAc()
    {
        return view('post');
    }

    public function save(Request $request)
    {
        $rules = [
            'name' => 'required|min:5'
        ];
        $this->validate($request, $rules);

        $name = $request->get('name');

        dd($name);
    }
}
