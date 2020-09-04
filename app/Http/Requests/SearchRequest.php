<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SearchRequest extends FormRequest
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
            'search_category' => 'not_in:0',
            'search_word' => 'required',
        ];
    }

    public function messages() {
        return [
            'search_category.not_in' => '検索カテゴリーを選択してください。',
            'search_word.required' => '検索ワードは20字以内で入力してください。',
        ];
    }
}
