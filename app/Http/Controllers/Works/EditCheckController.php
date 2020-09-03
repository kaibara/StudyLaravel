<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class EditCheckController extends Controller
{
    public function edit_check(Request $request)
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
        return view('works/edit_check',['Data' => $edit_data]);
    }

}
