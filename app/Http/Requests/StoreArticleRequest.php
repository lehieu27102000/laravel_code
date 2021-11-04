<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'min:10',
            // 'comtent' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'Tiêu đề ít nhất pahir 10 ký tự',
            // 'content.required' => 'Vui lòng nhập nội dung bài viết'
        ];
    }
}
