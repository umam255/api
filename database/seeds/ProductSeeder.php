<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {

            // insert data ke table pegawai menggunakan Faker
            DB::table('products')->insert([
                'nama_product' => $faker->name,
                'harga_product_' => $faker->jobTitle,
                'gambar_product' => $faker->numberBetween(25, 40),
            ]);
        }
    }
}
