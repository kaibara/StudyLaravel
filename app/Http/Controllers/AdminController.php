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
    	for($i=0; $i < count($User_data); $i++) {
    		$job_id = $User_data[$i]['works_id'];
        	$job_get[$i] = Work::where('works_id', $job_id)->where('delete_flag',0)-> first();
        	if(!isset($job_get[$i]['works_name'])){
    			$job_data[$i] = "新しい職種を選択してください。";

        	}else{
    			$job_data[$i] = $job_get[$i]['works_name'];
        	}
    	}
        return view('admin',['User' => $User_data, 'Work' => $Work_data, 'Job' => $job_data]);
    }
}