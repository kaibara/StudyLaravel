<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRegisterRequest;

class EntryCheckController extends Controller
{
    public function entry_check(UserRegisterRequest $request)
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
		$pass = bin2hex(random_bytes(4));
        return view('/user/entry_check',['Data' => $entry_data, 'Pass' => $pass]);
    }
}
