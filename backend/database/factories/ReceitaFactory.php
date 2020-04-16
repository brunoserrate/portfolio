<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Receita;
use Faker\Generator as Faker;

$factory->define(Receita::class, function (Faker $faker) {

    return [
        'img' => $faker->text,
        'titulo' => $faker->word,
        'ingredientes' => $faker->text,
        'tipo_refeicao_id' => $faker->randomDigitNotNull,
        'porcoes' => $faker->randomDigitNotNull,
        'dificuldade' => $faker->word,
        'etapas' => $faker->text,
        'tempo_preparo' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'criado_por' => $faker->word
    ];
});
