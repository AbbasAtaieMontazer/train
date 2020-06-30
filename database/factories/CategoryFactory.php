<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Category;
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name'      =>      $faker->name,
        'description'   =>  $faker->sentence,
        'image'         =>  $faker->imageUrl
    ];
});
