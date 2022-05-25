<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SiteContato;
use Faker\Generator as Faker;

$factory->define(SiteContato::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'telefone' => $faker->phoneNumber,
        'email' => $faker->unique()->email,
        'motivo_contato' => array_rand(['Duvida', 'Elogio', 'Reclamaçao'], 1),
        'mensagem' => $faker->text,
        'user_ip' => '192.168.0.1'
    ];
});
