<?php

namespace App\Http\Controllers\SpliteBlade;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpliteBladeController extends Controller
{
    public function index()
    {
        return view('/splite_blade/index');
    }

    public function ajax(Request $request)
    {
        $ajax_form = "入力された値は".$request->input('ajax_input')."です。";

        return response()->json([
            'form' => view('/splite_blade/ajax')->with(['input_data' => $ajax_form])->render()
        ]);

    }

}
