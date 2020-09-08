<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Work;
use Validator;

class ResultController extends Controller
{
    public function result(Request $request)
    {   
       $validator = Validator::make($request->all(), [
            'search_category' => 'not_in:選択してください。',
            'search_word' => 'required',
        ],
        [
            'search_category.not_in' => '検索カテゴリーを選択してください。',
            'search_word.required' => '検索ワードを入力してください。',
        ]);
        if ($validator->fails()) {
            $category = $request -> input('search_category');
            if($category !== "WORKS"){
                $search = $request -> input('search_word');
                $category_name = ['選択してください。','ID','NAME','WORKS','COMMENT'];
                $works_data = Work::where('delete_flag', 0)->get();
                $search_data = array(
                    'category' => $category,
                    'search' => $search
                );
                return view('user/search',['NAME' => $category_name, 'Search' => $search_data, 'Work' => $works_data])
                    -> withErrors($validator);
            }
        }
        $category = $request -> input('search_category');
        if($category !== "WORKS"){
            $search = $request -> input('search_word');
            $user_data = User::where($category, 'like', "%$search%") -> get();
            if(count($user_data) > 0){
                foreach ($user_data as $key) {
                    $search_id = $key['works_id'];
                    $search_data = Work::where('works_id', $search_id) -> first();
                    $search_works[] = $search_data['works_name'];
                }
            }else{
                $search_works = "";
            }
        }else{
            $category_name = "works_id";
            $search_id = $request -> input('search_job');
            $search_data = Work::where('works_id', $search_id) -> first();
            $search = $search_data['works_name'];
            $search_works = $search_data['works_name'];
            $user_data = User::where($category_name, 'like', "$search_id") -> get();
        }
        $search_data = array(
            'category' => $category,
            'search' => $search
        );
        return view('user/result',['Search' => $search_data, 'User' => $user_data, 'Works' => $search_works]);
    }
}
