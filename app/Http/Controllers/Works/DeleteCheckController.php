<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class DeleteCheckController extends Controller
{
    public function delete_check(Request $request)
    {
        $delete_id = $request -> input('delete_works_id');
        $delete_data = Work::where('works_id', $delete_id) -> first();
        return view('works/delete_check',['Data' => $delete_data]);
    }
}
