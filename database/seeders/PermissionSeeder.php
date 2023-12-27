<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        $guard = "web";   
        Permission::insert([
            ['name' => 'akses-menu-dashboard','guard_name' => $guard, 'created_at' => now(),'updated_at' => now()],
            ['name' => 'akses-menu-keuangan', 'guard_name' => $guard, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'akses-menu-events','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'akses-menu-volunteer','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'akses-menu-donasi','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'akses-menu-galeri','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'akses-menu-berita','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'akses-menu-testimoni-feedback','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'create-donasi','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
            ['name' => 'daftar-volunter','guard_name' => $guard,'created_at' => now(),'updated_at' => now()],
        ]);
    }
}
