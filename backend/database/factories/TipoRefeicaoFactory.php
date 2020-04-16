<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TipoRefeicao;
use Faker\Generator as Faker;

$factory->define(TipoRefeicao::class, function (Faker $faker) {

    return [
        'nome' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
