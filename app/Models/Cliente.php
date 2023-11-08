<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = "clientes";
    protected $primaryKey = "cliente_id";
    protected $fillable = [
        "nome",
        "telefone",
        "cpf",
        "data_nascimento",
        "cep",
        "endereco",
        "estado",
        "cidade",
        "bairro",
        "numero",
        "complemento",
    ];
}
