<?php

use Illuminate\Database\Seeder;

class TabelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->truncate();

        $users = [
            [
                'name' => 'lutdinar',
                'email' => 'lutdinar@icloud.com',
                'email_verified_at' => now(),
                'password' => md5('root123'),
                'remember_token' => md5('qwerty12345'),
                'created_at' => now()
            ],
            [
                'name' => 'kiki',
                'email' => 'kiki@gmail.com',
                'email_verified_at' => now(),
                'password' => md5('root123'),
                'remember_token' => md5('abcde12345'),
                'created_at' => now()
            ]
        ];

        DB::table('users')->insert($users);
    }
}
