<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MypageController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('user/user',['title' => 'ユーザー画面']);
    }

    public function postIndex(Request $request)
    {
    	$user_id = $request -> input('login_id');
    	$pass = $request -> input('login_pass');
    	$data = Account::where('mail', $user_id) -> where('pass', $pass) -> where('delete_flag', 0) -> first();
    	if(isset($data)){
    		return view('user/mypage',['title' => 'ユーザー画面', 'data' => $data]);
    	}else{
    		return view('user/login',['title' => 'ログイン画面', 'data' => 'ログインできませんでした。もう一度やり直してください。']);
    	}

        
    }
}