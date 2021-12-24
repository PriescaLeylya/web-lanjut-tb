<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'nama' => $faker->nama,
        'email' => $faker->unique()->safeEmail,
        'ttl' => $faker->ttl,
        'notelp' => $faker->notelp,
        'alamat' => $faker->alamat,
        'paket' => $faker->paket,
        'bukti_tf' => $faker->bukti_tf,
        'status' => $faker->status,
    ];
});
