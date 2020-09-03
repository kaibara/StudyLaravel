<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Work;

class AdminController extends Controller
{
	public function admin()
    {
    	$User_data = User::all();
    	$Work_data = Work::all();
        return view('admin',['User' => $User_data, 'Work' => $Work_data]);
    }
}