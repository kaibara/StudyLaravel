<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkEntryCheckController extends Controller
{
	public function getIndex(Request $request)
    {
        return view('admin/entry',['title' => '新規職種登録画面']);
    }

    public function postIndex(Request $request)
    {
    	$name = $request -> input('work_name');
        return view('admin/entry_check',['title' => '新規職種登録確認画面', 'data' => $name]);
    }
}