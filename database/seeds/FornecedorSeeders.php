<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;

class FornecedorSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Fornecedor::class, 100)->create();
    }
}
