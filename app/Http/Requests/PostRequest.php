<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "title" => 'required|min:3|max:100|regex:/^[A-ZÀ-úa-z\s]+$/',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "date" => 'required|date|before_or_equal:now|date_format:"Y-m-d H:i:s"',
            "description" => 'required',
            "viewMore" => 'nullable|url',
            'category' => 'required|exists:categories,id'
        ];
    }
    public function messages()
    {
        return [
            'title.regex' => 'Title should contain only letters and spaces'
        ];
    }
}
