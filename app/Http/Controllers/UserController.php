<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getIndex(Request $request)
    {
        return view('user/user',['title' => 'ユーザー画面']);
    }

    public function postIndex(Request $request)
    {
        return view('user/user',['title' => 'ユーザー画面']);
    }
}