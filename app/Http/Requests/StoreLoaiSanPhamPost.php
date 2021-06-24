<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoaiSanPhamPost extends FormRequest
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
            'ten_loai'=>'required',
            'hinh' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
    public function messages(){
        return [
            'required'=>'Vui lòng nhập dữ liệu',
            'hinh.image'=>'Chỉ chọn hình ảnh'
        ];
    }
    public function attributes(){
        return [
            'ten_loai'=>'Tên loại',
            'hinh'=>'Hình'
        ];
    }
}
