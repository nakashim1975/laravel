<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request) {

        $data = [
            'msg'=>'これはコントローラーから渡されたメッセージです。',
            'id1'=> $request->id1
        ];
        return view('hello.index', $data);

    }
}
