<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required|password',
            'phone_number' => 'required|numeric',
            'ward' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'address' => 'required'
        ];
    }

    public function attributes()
    {        
        return [
            'user_name' => 'Tên người dùng',
            'password' => 'Mật khẩu',
            'phone_number' => 'Số điện thoại',
            'ward' => 'Xã',
            'district' => 'Huyện',
            'city' => 'Thành phố',
            'province' => 'Tỉnh',
            'address' => 'Địa chỉ'
        ];
    }

}
