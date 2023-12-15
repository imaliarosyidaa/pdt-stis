<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Berita;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\PermissionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan'
        ]);

        Category::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan'
        ]);

        Category::create([
            'name' => 'Infrastruktur',
            'slug' => 'infrastruktur'
        ]);

        Berita::factory(20)->create();
    }
}
