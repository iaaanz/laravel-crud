<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //Método para definir que não precisa ter um usuário logado (true) 
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
        //Retorna as regras de validação
        return [
            //'campo' => 'validação',
            'title' => 'required',
            'pages' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            //'campo.validacao' => 'mensagem personalizada'
            //'title.required' => 'Coloque o título'
        ];
    }
}
