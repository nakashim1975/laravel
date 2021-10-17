<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function __invoke() {

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
                <h1>Single Action</h1>
                <p>これは、シングルアクションコントローラのアクションです。</p>
            </body>
            </html>
        EOF;
    }
}