<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'access book']);
        Permission::create(['name' => 'add book']);
        Permission::create(['name' => 'edit book']);
        Permission::create(['name' => 'delete book']);

        Permission::create(['name' => 'access genre']);
        Permission::create(['name' => 'add genre']);
        Permission::create(['name' => 'edit genre']);
        Permission::create(['name' => 'delete genre']);

        Permission::create(['name' => 'access collection']);
        Permission::create(['name' => 'add collection']);
        Permission::create(['name' => 'edit collection']);
        Permission::create(['name' => 'delete collection']);

        Permission::create(['name' => 'access user']);
        Permission::create(['name' => 'add user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);
    }
}
