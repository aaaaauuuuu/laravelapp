<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Http\Response;

// class HelloController extends Controller
// {
    
//     public function index(Request $request , Response $response) {
//         $html = <<<EOF
//         <html>
//         <head>
//         <title>Hello/Index</title>
//         <style>
//         body {font-size: 16pt; 
//             color: black;}
//         h1{font-size: 120pt; 
//             text-align:right; 
//             color: blue;
//             margin: -50px 0px -120px 0px;}
//         </style>
//         </head>
//         <body>
//             <h1>Hello</h1>
//             <h3>Request</h3>
//             <pre>{$request}</pre>
//             <h3>Response</h3>
//             <pre>{$response}</pre>
//         </body>
//         </html>
//         EOF;

//                 $response->setContent($html);
//                 return $response;

//     }
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;


class HelloController extends Controller
{
//     public function index(Request $request,Response $response) {

// $html = <<<EOF
//         <html>
//         <head>
//         <title>Request&Response</title>
//         <style>
//         body {
//             font-size:16pt;
//             color:#999;
//         }
//         h1 {
//             font-size:100pt;
//             text-align: right;
//             color:#eee;
//             margin:-40px 0 -50px 0;
//         }
//         </style>
//         </head>
//         <body>
//             <h1>Hello</h1>
//             <h3>Request</h3>
//             <pre>{$request}</pre>
//             <h3>Response</h3>
//             <pre>{$response}</pre>
//             <h3>アクセスしたURLを表示 url()</h3>
//             <pre>{$request->url()}</pre>
//             <h3>アクセスしたURLをすべて表示する fullUrl()</h3>
//             <pre>{$request->fullUrl()}</pre>
//             <h3>ドメイン下のパス部分だけを返す path()</h3>
//             <pre>{$request->path()}</pre>

//         </body>
//         </html>
// EOF;
//         $response->setContent($html);
//         return $response;
//     }


    public function index()
    {
        $data = ['msg' =>'これはコントローラから渡されたメッセージです。'];
        return view('welcome.hello',$data);
    }
}