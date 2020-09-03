<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class EditFinishController extends Controller
{
    public function edit_finish(Request $request)
    {
        $edit_id = $request -> input('edit_id');
        $edit_name = $request -> input('edit_name');
        $edit_flag = $request -> input('edit_flag');
        $edit_play = Work::where('works_id', $edit_id) -> update(['works_name' => $edit_name, 'delete_flag' => $edit_flag]);
        $edit_data = Work::where('works_id', $edit_id) -> first();
        return view('works/edit_finish',['Data' => $edit_data]);
    }
}
