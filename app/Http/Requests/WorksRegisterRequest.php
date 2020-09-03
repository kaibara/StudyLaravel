<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorksRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'entry_works_name' => 'required|max:20|unique:works,works_name',
            'entry_delete_flag' => 'boolean',
        ];
    }

    public function messages() {
        return [
            'entry_works_name.required' => '職種名を入力してください。',
            'entry_works_name.max' => '職種名は20字以内で入力してください。',
            'entry_works_name.unique' => 'この職種名は既に利用されています。',
            'entry_delete_flag.boolean'  => '0か1を入力してください。',
        ];
    }
}
