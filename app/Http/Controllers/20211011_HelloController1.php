<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // // コントローラーの中にＨＴＭＬを返すメソッドを追加
    // // これをアクションメソッドという
    // public function index() {

    //     echo 'test3';

    //     // ヒアドキュメント形式で、<<<演算子で長文テキストを
    //     // 変数に格納する
    //     return <<<EOF
    //         <html>
    //         <head>
    //         <title>Hello/Index</title>
    //         <style>
    //             body {
    //                 font-size   :16pt; 
    //                 color       :#999;
    //             }
    //             h1 { 
    //                 font-size   :100pt;
    //                 text-align  :right;
    //                 color       :#eee;
    //                 margin      :-40px 0 -50px 0;
    //             }
    //         </style>
    //         </head>
    //         <body>
    //             <h1>Index</h1>
    //             <p>これは、Helloコントローラのindexアクションです。</p>
    //         </body>
    //         </html>
    //     EOF;

    // }

    public function index($id='noname',$pass='unknown') {

        return <<<EOF
            <html>
            <head>
            <title>Hello/Index</title>
            <style>
                body {
                    font-size   :16pt; 
                    color       :#999;
                }
                h1 { 
                    font-size   :100pt;
                    text-align  :right;
                    color       :#eee;
                    margin      :-40px 0 -50px 0;
                }
            </style>
            </head>
            <body>
                <h1>Index</h1>
                <p>これは、Helloコントローラのindexアクションです。</p>
                <ul>
                    <li>ID:{$id}</li>
                    <li>PASS:{$pass}</li>
                </ul>
            </body>
            </html>
        EOF;

    }
}
