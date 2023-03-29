<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            EmplacementSeeder::class,
            GenreSeeder::class,
            BookSeeder::class,
            CollectionSeeder::class,
        ]);

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('admin');

        $user = User::factory()->create([
            'name' => 'mehdi',
            'email' => 'mehdi@qaos.com',
        ]);

        $user->assignRole('user');

        $user = User::factory()->create([
            'name' => 'receptionist',
            'email' => 'receptionist@biblio.com',
        ]);

        $user->assignRole('receptionist');
    }
}
