<?php
/* リスト3-13 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        return view('hello.index');

    }

    public function post(Request $request) {
        
        return view('hello.index', ['msg'=>$request->msg]);

    }

}
