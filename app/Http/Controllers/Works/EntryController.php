<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function entry()
    {
        return view('/works/entry');
    }

    public function return_entry(Request $request)
    {
    	$entry_works_name = $request -> input('entry_works_name');
    	$entry_delete_flag = $request -> input('entry_delete_flag');
    	$entry_data = array(
    		'entry_works_name' => $entry_works_name,
    		'entry_delete_flag' => $entry_delete_flag
    	);
        return view('/works/entry',['Data' => $entry_data]);
    }
}
