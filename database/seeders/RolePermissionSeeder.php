<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Daftar Permission
        Permission::create(['name' => 'akses-menu-admin']);
        Permission::create(['name' => 'create-donasi']);
        Permission::create(['name' => 'daftar-volunter']);

        //Daftar Role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'umum']);
        Role::create(['name' => 'mahasiswa']);

        //Atur permisssion
        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('akses-menu-admin');
        
        $roleUmum = Role::findByName('umum');
        $roleUmum->givePermissionTo('create-donasi');

        $roleMahasiswa = Role::findByName('mahasiswa');
        $roleMahasiswa->givePermissionTo('daftar-volunter');
    }
}
