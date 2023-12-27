<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            // 'img' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'tên là bắt buộc',
            'name.max'  => 'tên ko được vượt quá 255 ký tự',
            // 'img.required' => 'hình ảnh là bắt buộc',
//            'img.image' => 'File tải lên phải là hình ảnh',
//            'img.mimes' => 'File hình ảnh không đúng định dạng'
//            'status.required' => 'status không được để trống'
        ];
    }
}
