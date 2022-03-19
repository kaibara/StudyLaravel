<?php

namespace App\Http\Controllers\ConfirmForm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConfirmFormController extends Controller
{

    public $form_data = [
        ["name", "text"],
        ["age", "text"],
        ["email", "emai"],
    ];

    public function index()
    {
        return view('/confirm_form/index',[
            'form_data' => $this->form_data,
        ]);
    }

    public function confirm(Request $request)
    {

        $validation_array = [
            'name' => 'required | string',
            'age' => 'required | numeric',
            'email' => 'required | email',
        ];

        $validator = Validator::make($request->all(), $validation_array);

        if ($validator->fails()) {
            return redirect('/confirm_form/')
                        ->withErrors($validator)
                        ->withInput();
        };

        $input_data = [
            ["name", $request->input('name')],
            ["age", $request->input('age')],
            ["email", $request->input('email')],
        ];

        return view('confirm_form/confirm',[
            'input_data' => $input_data,
        ]);
    }

    public function complete(Request $request)
    {
        if($request->input('back') == 'back'){
            return redirect('/confirm_form/')
                        ->withInput();
        }

        return view('confirm_form/complete');
    }
}
