<?php

namespace App\Http\Requests\member;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:members',
            'national_id' => 'required|string|max:255|unique:members',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'file|mimes:jpeg,png'
        ];
    }
}