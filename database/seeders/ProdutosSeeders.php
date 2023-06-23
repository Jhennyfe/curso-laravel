<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produtos;

class ProdutosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produtos::create([
            'name' => 'O mágico de Oz',
            'valor' => '70.00R$',
            'quantidade' => '16',
        ]);
    }
}
