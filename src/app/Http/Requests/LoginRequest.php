<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'=>['required','regex:/^[a-zA-Z0-9._%+-]+@example\.com$/'],
            'password'=>['required'],

        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'メールアドレスを入力してください',
            'email.regex'=>'メールアドレスは「ユーザー名@ドメイン」形式で入力してください',
            'password'=>'パスワードを入力してください',
        ];
    }
}
