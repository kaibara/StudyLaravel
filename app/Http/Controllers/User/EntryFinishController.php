<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Work;

class EntryFinishController extends Controller
{
    public function entry_finish(Request $request)
    {
    	$entry_name = $request -> input('entry_name');
    	$entry_email = $request -> input('entry_email');
    	$entry_pass = $request -> input('entry_pass');
    	$entry_works_id = $request -> input('entry_works_id');
        $works = Work::where('works_id', $entry_works_id) -> first();
        $entry_works_name = $works['works_name'];
    	$entry_comment = $request -> input('entry_comment');
    	$entry_delete_flag = $request -> input('entry_delete_flag');
    	User::create([
            'name' => $entry_name,
            'email' => $entry_email,
            'password' => Hash::make($entry_pass),
            'works_id' => $entry_works_id,
            'comment' => $entry_comment,
            'delete_flag' => $entry_delete_flag
        ]);
        $display_id = User::max('id');
        $display_data = User::where('id', $display_id) -> first();
        if($_SERVER['REQUEST_URI'] == "/home/entry_finish"){
            $back_action = "/";
            $back_message = "トップ";
        }else{
            $back_action = "/admin";
            $back_message = "管理画面";
        }
        return view('/user/entry_finish',['Data' => $display_data, 'Pass' => $entry_pass, 'Name' => $entry_works_name, 'Back' => $back_action, 'Message' => $back_message]);
    }
}
