<?php

namespace App\Http\Controllers\Works;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;
use Validator;

class EditCheckController extends Controller
{
    public function edit_check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'edit_name' => 'required|max:20|unique:works,works_name',
            'edit_flag' => 'boolean',
        ],
        [
            'edit_name.required' => '職種名を入力してください。',
            'edit_name.max' => '職種名は20字以内で入力してください。',
            'edit_name.unique' => 'この職種名は既に登録されています。',
            'edit_flag.boolean'  => '0か1を入力してください。',
        ]);

        if ($validator->fails()) {
            $edit_id = $request -> input('edit_id');
            $edit_name = $request -> input('edit_name');
            $edit_delete_flag = $request -> input('edit_delete_flag');
            $edit_data = Work::where('works_id', $edit_id) -> first();
            $edit = array(
                'works_id' => $edit_id,
                'works_name' => $edit_name, 
                'created_at' => $edit_data['created_at'],
                'updated_at' => $edit_data['updated_at'],
                'delete_flag' => $edit_delete_flag
            );
            return view('works/edit',['Data' => $edit])
                    -> withErrors($validator);
        }
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

    public function messages() {
        return ;
    }

}
