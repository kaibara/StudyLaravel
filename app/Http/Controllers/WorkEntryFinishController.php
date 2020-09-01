<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkEntryFinishController extends Controller
{
	public function getIndex(Request $request)
    {
        return view('admin/entry',['title' => '新規職種登録画面']);
    }

    public function postIndex(Request $request)
    {
    	$name = $request -> input('work_name');
    	$work_data = array('works_name' => $name);
    	Work::create($work_data);
        return view('admin/entry_finish',['title' => '新規職種登録完了画面', 'data' => $name]);
    }
}