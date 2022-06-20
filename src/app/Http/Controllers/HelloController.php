<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{

    public function index(Request $request)
    {
        return view('hello.index', ['msg'=>'フォームを入力下さい。']);
    }

    public function post(HelloRequest $request)
    {
        return view('hello.index',['msg'=>'正しく入力されました！']);
    }

//     public function index(Request $request, Response $response){
//         $html = <<<E0F
//         <!DOCTYPE html>
//         <html lang="en">
//         <head>
//             <meta charset="UTF-8">
//             <meta http-equiv="X-UA-Compatible" content="IE=edge">
//             <meta name="viewport" content="width=device-width, initial-scale=1.0">
//             <title>Document</title>
//             <style>
//             body{font-size:16px; color:#999;}
//             h1{font-size:100px; text-aline:right; color:#eee;
//             margin:-40px 0px -50px 0px;}
//             </style>
//         </head>
//         <body>
//             <h1>Hello</h1>
//             <h3>Request</h3>
//             <pre>{$request}</pre>
//             <h3>Responses</h3>
//             <pre>{$response}</pre>
//         </body>
//         </html>
//         E0F;
//                 $response->setContent($html);
//                 return $response;
//     }

    // public function index($id='zero')
    // {
    //     $data = [
    //         'msg'=>'これはコントローラから渡されたメッセージです。',
    //         'id'=>$id
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function index(Request $request)
    // {
    //     $data = [
    //         'msg'=>'これはコントローラから渡されたメッセージです。',
    //         'id'=>$request->id
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function index()
    // {
    //     $data = [
    //         'msg'=>'お名前を入力してください。',
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function post(Request $request)
    // {
    //     $msg = $request->msg;
    //     $data = [
    //         'msg'=>'こんにちは、' . $msg . 'さん！',
    //     ];
    //     return view('hello.index', $data);
    // }

    // public function index()
    // {
    //     return view('hello.index', ['msg'=>'']);
    // }

    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg'=>$request->msg]);
    // }

    // public function index()
    // {
    //     $data = ['one', 'two', 'three', 'four', 'five'];
    //     return view('hello.index', ['data'=>$data]);
    // }

    // public function index(Request $request)
    // {
    //     $validator = Validator::make($request->query(),[
    //         'id' => 'required',
    //         'pass' => 'required',
    //     ]);
    //     if ($validator->fails()){
    //         $msg = 'クエリーに問題があります。';
    //     }else{
    //         $msg = 'ID/PASSを受け付けました。フォームを入力ください。';
    //     }
    //     return view('hello.index',['msg'=>$msg,]);
    // }

    // public function post(Request $request)
    // {
    //     $rules = [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric',
    //     ];
    //     $messages = [
    //         'name.required' => '名前は必ず入力してください。',
    //         'mail.email' => 'メールアドレスが必要です。',
    //         'age.numeric' => '年齢を整数で記入下さい。',
    //         'age.min' => '年齢はゼロ歳以上で記入下さい。',
    //         'age.max' => '年齢は200歳以下で記入下さい。',
    //     ];
    //     $validator = Validator::make($request->all(), $rules, $messages);
    //     $validator->sometimes('age','min:0', function($input){
    //         return !is_int($input->age);
    //     });
    //     $validator->sometimes('age','max:200', function($input){
    //         return !is_int($input->age);
    //     });

    //     if($validator->fails()){
    //         return redirect('/hello')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
    //     return view('hello.index',['msg'=>'正しく入力されました!']);
    // }

    // public function post(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'mail' => 'email',
    //         'age' => 'numeric|between:0,150',
    //     ]);
    //     if ($validator->fails()){
    //         return redirect('/hello')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }
    //     return view('hello.index',['msg'=>'正しく入力されました!']);
    // }

    // public function index()
    // {
    //     return view('hello.index', ['message'=>'Hello!']);
    // }

    // public function index()
    // {
    //     $data = [
    //         ['name'=>'山田たろう','mail'=>'taro@yamada'],
    //         ['name'=>'田中はなこ','mail'=>'hanako@flower'],
    //         ['name'=>'スズキちさこ','mail'=>'sachiko@happy']
    //     ];
    //     return view('hello.index', ['data'=>$data]);
    // }

}

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<E0F
// <style>
//     body{font-size:16px; color:#999;}
//     h1{font-size:100px; text-aline:right; color:#eee;
//         margin:-40px 0px -50px 0px;}
// </style>
// E0F;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt){
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

// class HelloController extends Controller
// {
//     public function index() {
//         global $head, $style, $body, $end;

//         $html = $head . tag('title','Hello/Index') . $style .
//         $body
//         . tag('h1','Index') . tag('p','this is Index page')
//         . '<a href="/hello/other">go to Other page</a>'
//         . $end;
//         return $html;
//     }

// public function other(){
//     global $head, $style, $body, $end;

//     $html = $head . tag('title','Hello/Other') . $style .
//     $body
//     . tag('h1','Other') . tag('p','this is Other page')
//     . $end;
//     return $html;
// }
// }

// class HelloController extends Controller
// {
// public function __invoke() {
//     return <<<E0F
//     <html>
//     <head>
//     <title>Hello</title>
//     <style>
//         body{font-size:16px; color:#999;}
//         h1{font-size:100px; text-aline:right; color:#eee;
//         margin:-40px 0px -50px 0px;}
//     </style>
//     </head>
//     <body>
//         <h1>Single Action</h1>
//         <p>これは、シングルアクションコントローラのアクションです。</p>
//     </body>
//     </html>
//     E0F;
//     }
// }

