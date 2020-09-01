<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkDeleteFinishController extends Controller
{
	public function getIndex(Request $request)
    {
        $Account_data = Account::all();
        $Work_data = Work::all();
        return view('admin/index',['title' => '管理画面', 'Account' => $Account_data,'Work' => $Work_data]);
    }

    public function postIndex(Request $request)
    {
        $id = $request -> input('delete_id');
        $delete_database = Work::where('works_id', $id) -> update(['delete_flag' => 1]);
        $delete_data = Work::where('works_id', $id) -> first();
        return view('admin/delete_finish',['title' => '職種削除完了画面', 'data' => $delete_data]);
    }
}