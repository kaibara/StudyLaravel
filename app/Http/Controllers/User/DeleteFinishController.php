<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DeleteFinishController extends Controller
{
    public function delete_finish(Request $request)
    {
        $delete_id = $request -> input('delete_id');
        $delete_play = User::where('id', $delete_id) -> update(['delete_flag' => 1]);
        $delete_data = User::where('id', $delete_id) -> first();
        return view('user/delete_finish',['Data' => $delete_data]);
    }
}
