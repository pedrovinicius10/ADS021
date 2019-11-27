<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CondominioRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|max:255',
            'cnpj' => 'required|numeric',
            'endereco' => 'required|numeric',
            'cep' => 'required|numeric',
            'bairro' => 'required|numeric',
            'cidade' => 'required|numeric',
            'uf' => 'required|numeric',
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'Obrigatório',
            'cnpj.required' => 'Obrigatório',
            'endereco.required' => 'Obrigatório',
            'cep.required' => 'Obrigatório',
            'bairro.required' => 'Obrigatório',
            'cidade.required' => 'Obrigatório',
            'uf.required' => 'Obrigatório',
        ];
    }

}
