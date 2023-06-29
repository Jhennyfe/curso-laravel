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
            'name' => 'Papel toalha',
            'valor' => '120.00R$',
            'quantidade' => '179',
        ]);
    }
}
