<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
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
    	$category = array(
    		'1' => 'ACCOUNTS_ID',
    		'2' => 'ACCOUNTS_NAME',
    		'3' => 'WORKS_ID',
    		'4' => 'COMMENT'
    	);
        return view('user/search',['title' => 'ユーザー検索画面', 'category' => $category]);
    }
}