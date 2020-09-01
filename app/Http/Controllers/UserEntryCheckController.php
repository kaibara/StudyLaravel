<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserEntryCheckController extends Controller
{
	public function getIndex(Request $request)
    {
        return view('/user/entry',['title' => '新規ユーザー登録画面']);
    }

    public function postIndex(Request $request)
    {
    	$name = $request -> input('user_name');
    	$mail = $request -> input('user_mail');
    	$pass = $request -> input('user_pass');
    	$work = $request -> input('user_work_id');
    	$comment = $request -> input('user_comment');
    	$data = array(
    		'user_name' => $name,
    		'user_mail' => $mail,
    		'user_pass' => $pass,
    		'user_work_id' => $work,
    		'user_comment' => $comment
    	);
        return view('/user/entry_check',['title' => '新規ユーザー登録確認画面', 'data' => $data]);
    }
}