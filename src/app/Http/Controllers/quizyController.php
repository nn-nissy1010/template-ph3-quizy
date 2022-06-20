<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class quizyController extends Controller
{

    public function index($big_question_id)
    {
        $data = [
            'id' => $big_question_id,
            'msg' => 'テスト'
        ];
        return view('hello.quizy' . $big_question_id, $data);
    }

    public function post()
    {
        return view('hello.quizy',['msg'=>'ポストあったよ']);
    }

}
