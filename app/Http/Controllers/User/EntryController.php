<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class EntryController extends Controller
{
    public function entry()
    {
        $works = Work::where('delete_flag',0)->get();
        if($_SERVER['REQUEST_URI'] == "/home/entry"){
            $back_url = "location.href='/'";
        }else{
            $back_url = "location.href='/admin'";
        }
        return view('/user/entry',['Work' => $works, 'Back' => $back_url]);
    }

    public function return_entry(Request $request)
    {
    	$entry_name = $request -> input('entry_name');
    	$entry_email = $request -> input('entry_email');
    	$entry_works_id = $request -> input('entry_works_id');
    	$entry_comment = $request -> input('entry_comment');
    	$entry_delete_flag = $request -> input('entry_delete_flag');
    	$entry_data = array(
    		'entry_name' => $entry_name,
    		'entry_email' => $entry_email,
    		'entry_works_id' => $entry_works_id,
    		'entry_comment' => $entry_comment,
    		'entry_delete_flag' => $entry_delete_flag
    	);
        $works = Work::where('delete_flag',0)->get();
        if($_SERVER['REQUEST_URI'] == "/home/entry"){
            $back_url = "location.href='/'";
        }else{
            $back_url = "location.href='/admin'";
        }
        return view('/user/entry',['Data' => $entry_data,'Work' => $works, 'Back' => $back_url]);
    }
}
