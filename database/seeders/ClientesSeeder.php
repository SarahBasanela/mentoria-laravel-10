<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
   
    public function run(): void
    {
        Cliente::create(
            [
            'nome' => 'José Pereira',
            'email' => 'jose.pereira@gmail.com',
            'endereco' => 'Rua São Paulo, 100',
            'logradouro' => '',
            'cep' => '1350-100 ',
            'bairro' => 'Rossio',
           ]
        );
    }
}
