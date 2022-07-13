<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ProfileAdminRequest extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
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
        'name'     =>  'required|string|max:50',
		'email'    =>  'sometimes|required|string|email|max:60|unique:admins,email,'.Auth::guard('admin')->user()->id,
		'password' =>  'nullable|min:8|confirmed',
        ];
    }
}
