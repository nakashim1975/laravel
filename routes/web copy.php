<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//echo 'test1';
//Route::get('hello','HelloController@index');
//echo 'test2';
//Route::get('/hello',[HelloController::class,'index']);
Route::get('/hello/{id?}/{pass?}',[HelloController::class,'index']);


/* 
Route::get('hello',function() {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body></html>';
});
*/

// $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
//     body {
//         font-size   :16pt; 
//         color       :#999;
//     }
//     h1 { 
//         font-size   :100pt;
//         text-align  :right;
//         color       :#eee;
//         margin:-40px 0 -50px 0;
//     }
// </style>
// </head>
// <body>
//     <h1>Hello</h1>
//     <p>This is sample page.</p>
//     <p>これは、サンプルで作ったページです。</p>
// </body>
// </html>
// EOF;

// Route::get('hello' ,function() use ($html) {
//     return $html;
// });

// Route::get('hello/{msg?}',function($msg='no message.') {

// $html = <<<EOF
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//         body {
//             font-size   :16pt; 
//             color       :#999;
//         }
//         h1 { 
//             font-size   :100pt;
//             text-align  :right;
//             color       :#eee;
//             margin:-40px 0 -50px 0;
//         }
//     </style>
//     </head>
//     <body>
//         <h1>Hello</h1>
//         <p>{$msg}</p>
//         <p>これは、サンプルで作ったページです。</p>
//     </body>
//     </html>
// EOF;

// return $html;

// });
