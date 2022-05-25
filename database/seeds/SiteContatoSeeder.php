<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  $contato = new SiteContato();
        $contato->nome = "Lucas";
        $contato->telefone = "(11) 98757-7586";
        $contato->email = "lucas@gmail.com";
        $contato->motivo = "Avalicação";
        $contato->menssagem = "Ótimo site! Gostei muito!";
        $contato->save();  */

        factory(SiteContato::class, 100)->create();
  
    }
}
