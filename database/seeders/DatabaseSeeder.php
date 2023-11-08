<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $clientes = [];

        for ($i = 0; $i < 10; $i++) {
            $clientes[] = [
                "nome"              => 'Nome Falso ' . ($i + 1),
                "telefone"          => '139' . $faker->randomNumber(8, true),
                "cpf"               => mt_rand(10000000000, 99999999999),
                "data_nascimento"   => $faker->date(),
                "cep"               => '1' . $faker->randomNumber(7, true),
                "endereco"          => 'Endereço Falso ' . ($i + 1),
                "estado"            => 'SP',
                "cidade"            => 'Cidade Falsa ' . ($i + 1),
                "bairro"            => 'Bairro Falso ' . ($i + 1),
                "numero"            => $faker->randomNumber(3),
            ];
        }

        Cliente::insert($clientes);
    }
}
