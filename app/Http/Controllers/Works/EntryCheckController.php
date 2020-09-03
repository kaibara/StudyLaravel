<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryCheckController extends Controller
{
    public function entry_check(Request $request)
    {
    	$entry_works_name = $request -> input('entry_works_name');
    	$entry_delete_flag = $request -> input('entry_delete_flag');
    	$entry_data = array(
    		'entry_works_name' => $entry_works_name,
    		'entry_delete_flag' => $entry_delete_flag
    	);
        return view('/works/entry_check',['Data' => $entry_data]);
    }
}
