<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'view all']);
        Permission::create(['name' => 'manage projects']);
        Permission::create(['name' => 'manage users']);

        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'developer']);
        Role::create(['name' => 'client']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'designer']);
    }
}
