<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class NoticiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 10) as $index) {
            DB::table('noticias')->insert([
                'titulo' => $faker->name,
                'descricao' => $faker->unique()->safeEmail,
                // 'password' => Hash::make('password'),
            ]);
        }
    }
}
