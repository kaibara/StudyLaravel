<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Work;
use Validator;

class EditCheckController extends Controller
{
    public function edit_check(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'edit_name' => 'required|max:20|unique:users,name,'.$request -> edit_id.',id',
            'edit_email' => 'required|email|unique:users,email,'.$request -> edit_id.',id',
            'edit_password' => 'required|string|min:8',
            'edit_comment' => 'required',
            'edit_delete_flag' => 'boolean',
        ],
        [
            'edit_name.required' => '名前を入力してください。',
            'edit_name.max' => '名前は20字以内で入力してください。',
            'edit_name.unique' => 'この名前は既に登録されています。',
            'edit_email.required' => 'Eメールを入力してください。',
            'edit_email.email' => 'Eメールはメールアドレス形式で入力してください。',
            'edit_email.unique' => 'このEメールアドレスは既に登録されています。',
            'edit_password.required' => 'パスワードを入力してください。',
            'edit_password.min' => 'パスワードは8文字以上で設定してください。',
            'edit_comment.required' => 'コメントを入力してください。',
            'edit_delete_flag.boolean'  => '0か1を入力してください。',
        ]);
        if ($validator->fails()) {
            $edit_id = $request -> input('edit_id');
            $edit_name = $request -> input('edit_name');
            $edit_email = $request -> input('edit_email');
            $edit_password = $request -> input('edit_password');
            $edit_works_id = $request -> input('edit_works_id');
            $edit_comment = $request -> input('edit_comment');
            $edit_delete_flag = $request -> input('edit_delete_flag');
            $edit_data = User::where('id', $edit_id) -> first();
            $edit = array(
                'id' => $edit_id,
                'name' => $edit_name,
                'email' => $edit_email,
                'password' => $edit_password,
                'works_id' => $edit_works_id,
                'comment' => $edit_comment,
                'created_at' => $edit_data['created_at'],
                'updated_at' => $edit_data['updated_at'],
                'delete_flag' => $edit_delete_flag
            );
            $back_url = "location.href='/admin'";
            $works = Work::where('delete_flag',0)->get();
            return view('user/edit',['User' => $edit, 'Back' => $back_url, 'Work' => $works, 'Pass' => $edit_password])
                -> withErrors($validator);
        }
        $id = $request -> input('edit_id');
        $name = $request -> input('edit_name');
        $email = $request -> input('edit_email');
        $password = $request -> input('edit_password');
        $works_id = $request -> input('edit_works_id');
        $works = Work::where('works_id', $works_id) -> first();
        $works_name = $works['works_name'];
        $comment = $request -> input('edit_comment');
        $flag = $request -> input('edit_delete_flag');
        $edit_database = User::where('id', $id) -> first();
        $edit_data = array(
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'works_id' => $works_id,
            'works_name' => $works_name,
            'comment' => $comment,
            'created_at' => $edit_database['created_at'],
            'updated_at' => $edit_database['updated_at'],
            'delete_flag' => $flag
        );
        if($_SERVER['REQUEST_URI'] == "/home/edit_check"){
            $back_action = "edit";
        }else{
            $back_action = "edit_return";
        }
        return view('user/edit_check',['Data' => $edit_data, 'Back' => $back_action]);
    }
}
