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
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo de email é obrigatório',
            'email.email' => 'Digite um endereço de email válido',
            'email.exists' => 'Esse email não está cadastrado',
            'password.required' => 'O campo de senha é obrigatório',
        ];
    }
}
