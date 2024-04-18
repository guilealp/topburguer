<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ProdutoFormRequest extends FormRequest
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
            'nome'=> 'required|max:80|min:5',
        'preco'=> 'required|decimal:2',
        'ingredientes'=>'required',
        'imagem'=>'required'
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
            'preco.required' => 'O campo preço é obrigatorio',
            'preco.decimal' => 'O campo esta incorreto',
            'ingredientes.required' => 'ingredientes é obrigatorio',
            'imagem.required'=>'campo imagem é obrigatorio'

        ];
    }
}
