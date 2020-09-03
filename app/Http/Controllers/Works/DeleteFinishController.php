<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class DeleteFinishController extends Controller
{
    public function delete_finish(Request $request)
    {
        $delete_id = $request -> input('delete_id');
        $delete_database = Work::where('works_id', $delete_id) -> update(['delete_flag' => 1]);
        $delete_data = Work::where('works_id', $delete_id) -> first();
        return view('works/delete_finish',['Data' => $delete_data]);
    }
}
