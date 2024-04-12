<?php

namespace App\Http\Requests\Usuario;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class AtualizarUsuarioRequest extends Request
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
            "nome" => "max:80",
            "email" => "email|max:80|unique:usuario,email",
            "senha" => "min:8",
            "tipo_documento" => "",
            "numero_documento" => "max:14",
            "cep" => "max:10",
            "bairro" => "max:80",
            "rua" => "required|max:80",
            "numero_endereco" => "max:6",
        ];
    }

    public function messages(): array
    {
        return [
            "max" => "O campo :attribute precisa ter no maxismo :max caracteres",
            "email" => "O campo :attribute precisa ser um email válido",
            "unique" => "O :attribute já existe",
            "min" => "O campo :attribute precisa ter no minimo :min caracteres",
        ];
    }
}
