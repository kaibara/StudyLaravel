<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class EntryFinishController extends Controller
{
    public function entry_finish(Request $request)
    {
    	$entry_works_name = $request -> input('entry_works_name');
    	$entry_delete_flag = $request -> input('entry_delete_flag');
    	Work::create([
            'works_name' => $entry_works_name,
            'delete_flag' => $entry_delete_flag
        ]);
        $display_id = Work::max('works_id');
        $display_data = Work::where('works_id', $display_id) -> first();
        return view('/works/entry_finish',['Data' => $display_data]);
    }
}
