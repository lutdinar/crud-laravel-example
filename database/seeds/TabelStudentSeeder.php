<?php

use Illuminate\Database\Seeder;

class TabelStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->truncate();

        $students = [
            [
                'nama' => 'Lut Dinar Fadila',
                'nrp' => '143040229',
                'email' => 'lutdinar@icloud.com',
                'jurusan' => 'Teknik Informatika',
                'user_id' => 1,
                'created_at' => now()
            ],
            [
                'nama' => 'Kiki Hadiansyah',
                'nrp' => '143040226',
                'email' => 'kiki@gmail.com',
                'jurusan' => 'Teknik Informatika',
                'user_id' => 2,
                'created_at' => now()
            ]
        ];

        DB::table('students')->insert($students);

    }
}
