<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResultController extends Controller
{
	public function getIndex(Request $request)
    {
    	$category = array(
    		'1' => 'ACCOUNTS_ID',
    		'2' => 'ACCOUNTS_NAME',
    		'3' => 'WORKS_ID',
    		'4' => 'COMMENT'
    	);
        return view('user/search',['title' => 'ユーザー検索画面', 'category' => $category]);
    }

    public function postIndex(Request $request)
    {
    	$category = $request -> input('search_category');
        $category_mini = strtoupper($category);
    	$word = $request -> input('search_word');
    	$data = Account::where($category, $word) -> where('delete_flag', 0) -> get();
        return view('user/result',['title' => 'ユーザー検索画面', 'category' => $category_mini, 'word' => $word, 'data' => $data]);
    }
}