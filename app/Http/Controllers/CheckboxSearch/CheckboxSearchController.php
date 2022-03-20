<?php

namespace App\Http\Controllers\CheckboxSearch;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CheckboxSearchController extends Controller
{
    public $form_data = [
        ['名前', 'checkbox[name]', 'name'],
        ['メールアドレス', 'checkbox[email]', 'email'],
        ['コメント', 'checkbox[comment]', 'comment'],        
    ];

    public function index()
    {
        return view('checkbox_search/index',[
            'form_data' => $this->form_data,
        ]);
    }

    public function search(Request $request)
    {

        $validation_array = [
            'keyword' => 'required',
            'checkbox' => 'required',
        ];

        $validator = Validator::make($request->all(), $validation_array);

        if ($validator->fails()) {
            return redirect('/checkbox_search/')
                        ->withErrors($validator)
                        ->withInput();
        };

        $checkbox_arrary = [];
        foreach ($request->input('checkbox') as $value){
            $checkbox_arrary[] = $value;
        }


        $user_data = DB::table('users');

        if(in_array('name', $checkbox_arrary)){
            $user_data->where('name', 'like', '%'.$request->input('keyword').'%');
        }
        if(in_array('email', $checkbox_arrary)){
            $user_data->where('email', 'like', '%'.$request->input('keyword').'%');
        }
        if(in_array('comment', $checkbox_arrary)){
            $user_data->where('comment', 'like', '%'.$request->input('keyword').'%');
        }

        $result = $user_data->get();

        return view('/checkbox_search/search',[
            'search_data' => $result,
        ]);
    }

}
