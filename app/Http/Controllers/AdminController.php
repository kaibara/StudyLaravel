<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
	public function admin()
    {
    	$User_data = User::all();
        return view('admin',['User' => $User_data]);
    }
}