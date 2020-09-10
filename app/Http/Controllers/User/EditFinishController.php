<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Work;

class EditFinishController extends Controller
{
     public function finish(Request $request)
    {
        $id = $request -> input('edit_id');
        $name = $request -> input('edit_name');
        $email = $request -> input('edit_email');
        $password = $request -> input('edit_password');
        $works_id = $request -> input('edit_works_id');
        $works = Work::where('works_id', $works_id) -> first();
        $works_name = $works['works_name'];
        $comment = $request -> input('edit_comment');
        $flag = $request -> input('edit_delete_flag');
        $edit_data = User::where('id', $id) -> update([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'works_id' => $works_id,
            'comment' => $comment,
            'delete_flag' => $flag
        ]);
        $User_data = User::where('id', $id) -> first();
        if($_SERVER['REQUEST_URI'] == "/home/edit_finish"){
            $back_action = "/home";
            $back_message = "トップ";
        }else{
            $back_action = "/admin";
            $back_message = "管理画面";
        }
        return view('user/edit_finish',['Data' => $User_data, 'Back' => $back_action, 'Message' => $back_message, 'Name' => $works_name, 'Pass' => $password]);
    }
}
