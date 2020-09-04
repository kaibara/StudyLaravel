<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\User;

class ResultController extends Controller
{
    public function result(SearchRequest $request)
    {
        $category = $request -> input('search_category');
        $word = $request -> input('search_word');
        $search_data = array(
        	'category' => $category,
        	'word' => $word
        );
        $user_data = User::where($category, 'like', "%$word%") -> get();
        return view('user/result',['Search' => $search_data, 'User' => $user_data]);
    }
}
