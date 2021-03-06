<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            'entry_name' => 'required|max:20|unique:users,name',
            'entry_email' => 'required|email|unique:users,email',
            'entry_works_id' => 'not_in:0',
            'entry_comment' => 'required',
            'entry_delete_flag' => 'boolean',
        ];
    }

    public function messages() {
        return [
            'entry_name.required' => '名前を入力してください。',
            'entry_name.max' => '名前は20字以内で入力してください。',
            'entry_name.unique' => 'この名前は既に登録されています。',
            'entry_email.required' => 'Eメールを入力してください。',
            'entry_email.email' => 'Eメールはメールアドレス形式で入力してください。',
            'entry_name.unique' => 'このEメールアドレスは既に登録されています。',
            'entry_works_id.not_in' => '職種を選択してください。',
            'entry_comment.required' => 'コメントを入力してください。',
            'entry_delete_flag.boolean'  => '0か1を入力してください。',
        ];
    }
}
