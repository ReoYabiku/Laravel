<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        $data = [
            ['name'=>'山田たろう', 'mail'=>'taro@yamada'],
            ['name'=>'田中はなこ', 'mail'=>'hanako@tanaka'],
            ['name'=>'鈴木さちこ', 'mail'=>'satiko@suzuki']
        ];

        return view('hello.index', ["data"=>$data]);
    }
}
