<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleGenre extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'category' => 'required | max:255',
            'slug' => 'required | unique:categories|max:255',
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'category.required' => 'Bắt buộc nhập thể loại',
            'slug.unique' => 'Slug này đã tồn tại',
            'slug.required' => 'Vui lòng nhập slug',
        ];
    }

    public function attributes()
    {
        return [
            'category' => 'Thể loại',
            'slug' => 'Slug'
        ];
    }
}
