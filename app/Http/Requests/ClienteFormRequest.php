<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:5|max:80',
                'telefone' =>'required|min:11|max:11',
                'endereco' => 'required|max:120',
                'email' =>'required|email|unique:clientes,email',
                'password'  => 'required',
                'foto' =>'required'
        ];
    }
        public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'error' => $validator->errors()
        ]));
    } 
    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatorio',
            'nome.max' => 'O campo nome deve conter no maximo 80 caracteres',
            'nome.min' => 'O campo nome deve conter no minimo 5 caracteres',
            'telefone.required' => 'O campo tlefone é obrigatorio',
            'telefone.max' => 'O campo telefone deve conter no maximo 11 caracteres',
            'telefone.min' => 'O campo telefone deve conter no minimo 10 caracteres',
            'email.required' => 'O campo email é obrigatorio',
            'email.max' => 'o campo email deve conter bo maximo 120 caracteres',
            'email.email' => 'formato de email invalido',
            'email.unique' => 'Email ja cadastrado no sistema',
            'endereco.required' => 'O campo endereço é obrigatorio',
            'endereco.max' => 'O campo endereco deve conter no maximo 120 caracteres',
            'password.required' => 'password é obrigatorio',
            'foto.required'=>'campo foto é obrigatorio'

        ];
    }
}

