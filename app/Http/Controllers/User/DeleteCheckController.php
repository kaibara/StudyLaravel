<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DeleteCheckController extends Controller
{
    public function delete_check(Request $request)
    {
        $delete_id = $request -> input('delete_id');
        $delete_data = User::where('id', $delete_id) -> first();
        return view('user/delete_check',['Data' => $delete_data]);
    }
}
