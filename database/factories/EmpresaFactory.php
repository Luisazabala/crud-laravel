<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empresa;
use Faker\Generator as Faker;

$factory->define(Empresa::class, function (Faker $faker) {
    return [
        'Nombre', 
        'Direccion', 
        'NombreRepresentante',
        'NIT',
        'Celular'
    ];
});
