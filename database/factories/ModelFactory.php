<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Device::class,function (Faker\Generator $faker){
    return [
        'device_id'=>$faker->numberBetween(20030000,20990000),
        'device_name'=>$faker->randomElement(['投影仪','微型计算机','调音台','幕布','功放']),
        'device_type'=>$faker->text(20),
        'device_price'=>$faker->numberBetween(100,100000),
        'device_department'=>('教学服务部'),
        'device_location'=>('思学楼'),
        'device_buy'=>$faker->date(),
        'device_owner'=>('陈梅'),
    ];
});

