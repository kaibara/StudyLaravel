<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
	public function getIndex(Request $request)
    {
    	$database_data = Account::where('delete_flag', 0) -> get();
        return view('user/detail',['title' => 'ユーザー詳細画面', 'data' => $database_data]);
    }

    public function postIndex(Request $request)
    {
        $database_data = Account::where('delete_flag', 0) -> get();;
        return view('user/detail',['title' => 'ユーザー詳細画面', 'data' => $database_data]);
    }
}