<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleMovies extends FormRequest
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
            'link_img' => 'required',
            'name' => 'required | max:255',
            'director' => 'required',
            'national' => 'required',
            'released' => 'integer: 4',
            'timing' => 'required',
            'slug' => 'required | unique:movies|max:255',
            'id_category' => 'integer',
            'status' => 'required'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Bắt buộc phải có tên phim',
            'slug.unique' => 'Slug phim này đã tồn tại',
            'slug.required' => 'Vui lòng nhập slug',
            'released.required' => 'Vui lòng nhập năm sản xuất',
            'released.integer' => 'Năm sản xuất bắt buộc phải có 4 số',
            'link_img.required' => 'Chưa có file hình ảnh',
            'timing.required' => 'Phim chưa có thời gian',
            'director.required' => 'Vui lòng nhập đạo diễn' ,
            'national.required' => 'Vui lòng nhập quốc gia',
            'status.required' => 'Vui lòng nhập trạng thái phim'
        ];
    }

    public function attributes()
    {
        return [
            'category' => 'Thể loại',
            'slug' => 'Slug',
            'released' => 'Năm sản xuất',
            'link_img' => 'Địa chỉ hình ảnh',
            'national' => 'Quốc gia',
            'timing' => 'Thời gian',
            'director' => 'Đạo diễn',
            'status' => 'Trạng thái'
        ];
    }
}
