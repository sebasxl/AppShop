<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
    'name' => substr($faker->sentence(3), 0, -1),        
    'description' => $faker->sentence(10),
    'longdescription' => $faker->text,
    'price' => $faker->randomFloat(2, 5, 150),
    'category_id' => $faker->numberBetween(1,5)
    ];
});
