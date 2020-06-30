<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;
use App\Models\Product_image;

$factory->define(Product_image::class, function (Faker $faker) {
    return [
        'pro_id'        =>      $faker->randomElement(Product::pluck('id','id')->toArray()),
        'pro_images'    =>      $faker->imageUrl
    ];
});
