<?php
/* リスト3-13 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {

        $data = ['one','two','three','four','five'];
        return view('hello.index',['data'=>$data]);
    }
}
