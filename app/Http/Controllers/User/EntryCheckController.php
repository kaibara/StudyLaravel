<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryCheckController extends Controller
{
    public function edit_check(Request $request)
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
