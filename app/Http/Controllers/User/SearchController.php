<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Work;

class SearchController extends Controller
{
    public function search()
    {
    	$category_name = ['ID','NAME','WORKS','COMMENT'];
        $works_data = Work::where('delete_flag', 0)->get();
        return view('user/search',['NAME' => $category_name, 'Work' => $works_data]);
    }

    public function return_search(Request $request)
    {
        $category = $request -> input('search_category');
        $word = $request -> input('search_word');
        $works = $request -> input('search_works');
        if($works == ""){
            $search_data = array(
            	'category' => $category,
            	'word' => $word
            );
        }else{
            $search_data = array(
                'category' => $category,
                'word' => $word,
                'works' => $works
            );
        }
    	$category_name = ['ID','NAME','WORKS_ID','COMMENT'];
        $works_data = Work::where('delete_flag', 0)->get();
        return view('user/search',['NAME' => $category_name, 'Search' => $search_data, 'Work' => $works_data]);
    }
}
