<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class EditController extends Controller
{
    public function edit(Request $request)
    {
    	$edit_id = $request -> input('edit_works_id');
        $edit_data = Work::where('works_id', $edit_id) -> first();
        return view('works/edit',['Data' => $edit_data]);
    }

    public function return_edit(Request $request)
    {
        $edit_id = $request -> input('edit_id');
        $edit_name = $request -> input('edit_name');
        $edit_flag = $request -> input('edit_flag');
        $works_data = Work::where('works_id', $edit_id) -> first();
        $edit_data = array(
            'works_id' => $edit_id,
            'works_name' => $edit_name,
            'created_at' => $works_data['created_at'],
            'updated_at' => $works_data['updated_at'],
            'delete_flag' => $edit_flag
        );
        return view('works/edit',['ReturnData' => $edit_data]);
        
    }
}
