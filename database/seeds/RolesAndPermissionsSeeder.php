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
        // Permission::create(['name' => 'edit articles']);


        // create roles and assign created permissions
        // $role = Role::create(['name' => 'moderator']);
        // $role->givePermissionTo(['publish articles', 'unpublish articles']);
        //
        // $role = Role::create(['name' => 'super-admin']);
        // $role->givePermissionTo(Permission::all());
    }
}