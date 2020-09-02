<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function entry()
    {
		$pass = random_bytes(8);
        return view('/user/entry',['Pass' => $pass]);
    }

    public function return_entry(Request $request)
    {
    	$entry_name = $request -> input('entry_name');
    	$entry_mail = $request -> input('entry_mail');
    	$entry_works_id = $request -> input('entry_works_id');
    	$entry_entry_comment = $request -> input('entry_comment');
    	$entry_data = array(
    		'entry_name' => $entry_name,
    		'entry_mail' => $entry_mail,
    		'entry_works_id' => $entry_work,
    		'entry_comment' => $entry_comment
    	);
		$pass = random_bytes(8);
        return view('/user/entry',['Pass' => $pass, 'Data' => $entry_data]);
    }
}
