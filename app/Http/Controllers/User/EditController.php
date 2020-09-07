<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Work;

class EditController extends Controller
{

    public function edit()
    {
    	$Auth_data = Auth::id();
    	$User_data = User::where('id', $Auth_data) -> first();
        $works = Work::where('delete_flag',0)->get();
        $back_url = "location.href='/home'";
        return view('user/edit',['User' => $User_data, 'Back' => $back_url, 'Work' => $works]);
    }

    public function admin(Request $request)
    {
        $edit_admin_id = $request -> input('edit_id');
        $edit_admin_data = User::where('id', $edit_admin_id) -> first();
        $works = Work::where('delete_flag',0)->get();
        $back_url = "location.href='/admin'";
        return view('user/edit',['User' => $edit_admin_data, 'Back' => $back_url, 'Work' => $works]);
    }

    public function return_check(Request $request)
    {
        $id = $request -> input('edit_id');
        $edit_data = User::where('id', $id) -> first();
        $name = $request -> input('edit_name');
        $email = $request -> input('edit_email');
        $works_id = $request -> input('edit_works_id');
        $comment = $request -> input('edit_comment');
        $flag = $request -> input('edit_delete_flag');
        $User_data = array(
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'works_id' => $works_id,
            'comment' => $comment,
            'created_at' => $edit_data['created_at'],
            'updated_at' => $edit_data['updated_at'],
            'delete_flag' => $flag
        );
        if($_SERVER['HTTP_REFERER'] == "/home/edit_check"){
            $back_url = "location.href='/home'";
        }else{
            $back_url = "location.href='/admin'";
        }
        $works = Work::where('delete_flag',0)->get();
        return view('user/edit',['User' => $User_data, 'Back' => $back_url, 'Work' => $works]);
    }
}
