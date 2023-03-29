<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::create(['name' => 'user']);
        $userPermissions = [
            'access book',
            'access genre',
            'access collection',
        ];
        $userRole->syncPermissions($userPermissions);

        $receptionistRole = Role::create(['name' => 'receptionist']);
        $receptionistPermissions = [
            'access book',
            'add book',
            'edit book',
            'delete book',
            'access genre',
            'add genre',
            'edit genre',
            'delete genre',
            'access collection',
            'add collection',
            'edit collection',
            'delete collection',
        ];
        $receptionistRole->syncPermissions($receptionistPermissions);

        $adminRole = Role::create(['name' => 'admin']);
        $adminPermissions = [
            'access book',
            'add book',
            'edit book',
            'delete book',
            'access genre',
            'add genre',
            'edit genre',
            'delete genre',
            'access collection',
            'add collection',
            'edit collection',
            'delete collection',
            'access user',
            'add user',
            'edit user',
            'delete user',
        ];
        $adminRole->syncPermissions($adminPermissions);
    }
}
