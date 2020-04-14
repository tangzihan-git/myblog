<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Article::class, function (Faker $faker) {
	 $date_time = $faker->date . ' ' . $faker->time;
     $updated_at = $faker->dateTimeThisMonth();//随机一个月
     $created_at = $faker->dateTimeThisMonth($updated_at);
     $sentence = $faker->sentence();
    return [
        'title'=>$sentence,
        'user_id'=>1,
        'body'=>$faker->text(200),
        'desc'=>$sentence,
        'key'=>$sentence,
        'visit_num'=>$faker->numberBetween(0,100),
        'zan'=>$faker->numberBetween(0,100),
        'created_at'=>$created_at,
        'updated_at'=>$updated_at,


    ];
});
