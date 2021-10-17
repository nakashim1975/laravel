<?php
/* リスト3-13 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {

        echo 'index';

        $data = [
            'msg'=>'お名前を入力して下さい。',
        ];
        return view('hello.index', $data);

    }

    public function post(Request $request) {
        
        echo 'post';

        $msg = $request->msg;

        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん！'
        ];

        return view('hello.index', $data);

    }

}
