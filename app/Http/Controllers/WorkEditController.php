<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Account;
use App\Work;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class WorkEditController extends Controller
{
	public function getIndex(Request $request)
    {
        $Account_data = Account::all();
        $Work_data = Work::all();
        return view('admin/index',['title' => '管理画面', 'Account' => $Account_data,'Work' => $Work_data]);
    }

    public function postIndex(Request $request)
    {
        $request_data = request() -> all(); 
        $id = $request['edit_id'];
        $edit_database = Work::where('works_id', $id) -> first();
        if(isset($request_data['edit_name']) && isset($request_data['edit_flag'])){
            $name = $request -> input('edit_name');
            $flag = $request -> input('edit_flag');
            $edit_data = array(
                'works_id' => $edit_database['works_id'],
                'works_name' => $name,
                'created_at' => $edit_database['created_at'],
                'updated_at' => $edit_database['updated_at'],
                'delete_flag' => $flag
            );
            return view('admin/edit',['title' => '職種編集画面', 'data' => $edit_data]);
        }else{
            return view('admin/edit',['title' => '職種編集画面', 'data' => $edit_database]);
        }
        
    }
}