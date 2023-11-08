<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        switch ($this->method()) {
            case "POST":
                return [
                    "nome"              => "required",
                    "telefone"          => "required",
                    "cpf"               => "required|unique:clientes,cpf",
                    "data_nascimento"   => "required",
                    "cep"               => "required",
                    "endereco"          => "required",
                    "bairro"            => "required",
                    "cidade"            => "required",
                    "estado"            => "required",
                    "numero"            => "required",
                    "complemento"       => ""
                ];
            case "PUT":
                return [
                    "nome"              => "required",
                    "telefone"          => "required",
                    "cpf"               => "required|unique:clientes,cpf,{$this->cliente->cliente_id},cliente_id",
                    "data_nascimento"   => "required",
                    "cep"               => "required",
                    "endereco"          => "required",
                    "bairro"            => "required",
                    "cidade"            => "required",
                    "estado"            => "required",
                    "numero"            => "required",
                    "complemento"       => ""
                ];
        }
    }
}
