<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkEditFinishController extends Controller
{
	public function getIndex(Request $request)
    {
        $Account_data = Account::all();
        $Work_data = Work::all();
        return view('admin/index',['title' => '管理画面', 'Account' => $Account_data,'Work' => $Work_data]);
    }

    public function postIndex(Request $request)
    {
        $id = $request -> input('edit_id');
        $name = $request -> input('edit_name');
        $flag = $request -> input('edit_flag');
        $edit_database = Work::where('works_id', $id) -> update(['works_name' => $name, 'delete_flag' => $flag]);
        $edit_data = Work::where('works_id', $id) -> first();
        return view('admin/edit_finish',['title' => '職種編集完了画面', 'data' => $edit_data]);
    }
}