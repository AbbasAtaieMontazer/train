<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Category;
use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'      => $faker->sentence,
        'description'   =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'price'     => $faker->randomElement([10 , 100 , 150,200, 100 ]),
        'cat_id'        =>  $faker->randomElement(Category::pluck('id','id')->toArray())
    ];
});
