<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class SearchController extends Controller
{
    public function search()
    {
    	$category_name = ['選択してください。','ID','NAME','WORKS','COMMENT'];
        $works_data = Work::where('delete_flag', 0)->get();
        return view('user/search',['NAME' => $category_name, 'Work' => $works_data]);
    }

    public function return_search(Request $request)
    {
        $category = $request -> input('search_category');
        if($category !== "WORKS"){
            $search = $request -> input('search_word');
            $search_data = array(
                'category' => $category,
                'search' => $search
            );
        }else{
            $search_id = $request -> input('search_job');
            $search_data = array(
                'category' => $category,
                'search' => $search_id
            );
        }
    	$category_name = ['選択してください。','ID','NAME','WORKS','COMMENT'];
        $works_data = Work::where('delete_flag', 0)->get();
        return view('user/search',['NAME' => $category_name, 'Search' => $search_data, 'Work' => $works_data]);
    }
}
