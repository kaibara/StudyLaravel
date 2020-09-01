<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserEntryFinishController extends Controller
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