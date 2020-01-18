<?php

use Illuminate\Database\Seeder;

class TabelBukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        \DB::table('books')->truncate();

        for ($i=0; $i < 100; $i++) {
            DB::table('books')->insert([
                'judul' => $faker->sentence(3),
                'penulis' => $faker->name,
                'stok' => $faker->numberBetween(1, 10),
                'deskripsi' => $faker->text(100),
                'created_at' => now()
            ]);
        }
    }
}
