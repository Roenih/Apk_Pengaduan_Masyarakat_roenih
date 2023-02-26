<?php

use Illuminate\Database\Seeder;
use \App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'level' => 'admin'
        ]);

        User::create([
            'nama' => 'petugas',
            'email' => 'petugas@petugas.com',
            'password' => bcrypt('12345678'),
            'level' => 'petugas'
        ]);

        User::create([
            'nama' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345678'),
            'level' => 'user'
        ]);
    }
}
