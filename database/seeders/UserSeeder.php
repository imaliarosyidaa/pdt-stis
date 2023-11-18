<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
        ]);
        $admin->assignRole('admin');

        $umum = User::create([
            'name' => 'umum',
            'username' => 'umum',
            'email' => 'umum@example.com',
            'password' => bcrypt('11111111'),
        ]);
        $umum->assignRole('umum');

        $mhs = User::create([
            'name' => 'mhs',
            'username' => 'mhs',
            'email' => 'mhs@example.com',
            'password' => bcrypt('00000000'),
        ]);
        $mhs->assignRole('mahasiswa');
    }
}
