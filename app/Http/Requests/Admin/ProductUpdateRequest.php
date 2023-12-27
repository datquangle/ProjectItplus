<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
{
    public function rules(): array
{
    return [
        'name' => 'required|max:255',
        'img' => 'sometimes',
        // 'status' => 'required|numeric'
    ];
}
    public function messages()
    {
        return [
            'name.required' => 'tên là bắt buộc',
            'name.max'  => 'tên ko được vượt quá 255 ký tự',
            'img.required' => 'hình ảnh là bắt buộc',
//            'img.image' => 'File tải lên phải là hình ảnh',
//            'img.mimes' => 'File hình ảnh không đúng định dạng'
//            'status.required' => 'status không được để trống'
        ];
    }
}
