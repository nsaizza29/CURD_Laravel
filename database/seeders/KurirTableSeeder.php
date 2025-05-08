<?php

namespace Database\Seeders;

use App\Models\Kurir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class KurirTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {
            Kurir::insert([
                'nama_kurir'     => $faker->name,
                'telepon'        => $faker->phoneNumber,
                'wilayah_operasi'=> $faker->city,
            ]);
        }
    }
}
