<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create annonce']);
        Permission::create(['name' => 'read annonce']);
        Permission::create(['name' => 'update annonce']);
        Permission::create(['name' => 'delete annonce']);


        // create roles and assign created permissions
        $role = Role::create(['name' => 'association']);
        $role->givePermissionTo(['create annonce', 'update annonce', 'delete annonce']);

        $role = Role::create(['name' => 'benevole']);
        $role->givePermissionTo(['read annonce']);

        $role = Role::create(['name' => 'administrateur']);
        $role->givePermissionTo(Permission::all());
    }
}
