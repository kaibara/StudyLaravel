<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
    	$category_name = ['ID','NAME','WORKS_ID','COMMENT'];
        return view('user/search',['NAME' => $category_name]);
    }

    public function return_search(Request $request)
    {
        $category = $request -> input('search_category');
        $word = $request -> input('search_word');
        $search_data = array(
        	'category' => $category,
        	'word' => $word
        );
    	$category_name = ['ID','NAME','WORKS_ID','COMMENT'];
        return view('user/search',['NAME' => $category_name, 'Search' => $search_data]);
    }
}
