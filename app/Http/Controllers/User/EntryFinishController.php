<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryFinishController extends Controller
{
    public function entry_finish(Request $request)
    {
    	$name = $request -> input('user_name');
    	$mail = $request -> input('user_mail');
    	$pass = $request -> input('user_pass');
    	$work = $request -> input('user_work_id');
    	$comment = $request -> input('user_comment');
    	$data = array(
    		'accounts_name' => $name,
    		'mail' => $mail,
    		'pass' => $pass,
    		'works_id' => $work,
    		'comment' => $comment
    	);
        Account::create($data);
        $id = Account::max('accounts_id');
        $display = Account::where('accounts_id', $id) -> first();
        return view('/user/entry_finish',['title' => '新規ユーザー登録完了画面', 'data' => $display]);
    }
}
