<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermSeeder extends Seeder
{
   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'r_users']);
        Permission::create(['name' => 'c_users']);
        Permission::create(['name' => 'u_users']);
        Permission::create(['name' => 'd_user']);
        
        Permission::create(['name' => 'see-projects']);
        Permission::create(['name' => 'store-projects']);
        Permission::create(['name' => 'patch-projects']);
        Permission::create(['name' => 'delete-projects']);
        
        Permission::create(['name' => 'see-daily-report']);
        Permission::create(['name' => 'store-daily-report']);
        Permission::create(['name' => 'patch-daily-report']);
        Permission::create(['name' => 'delete-daily-report']);

        Permission::create(['name' => 'see-daily-activity']);
        Permission::create(['name' => 'store-daily-activity']);
        Permission::create(['name' => 'patch-daily-activity']);
        Permission::create(['name' => 'delete-daily-activity']);

        Role::create(['name' => 'superadmin']);
        Role::create(['name' => 'manager']);
        Role::create(['name' => 'finance']);
        Role::create(['name' => 'employee']);

        $roleAdmin = Role::findByName('superadmin');
        $roleAdmin->givePermissionTo('see-users');
        $roleAdmin->givePermissionTo('store-users');
        $roleAdmin->givePermissionTo('patch-users');
        $roleAdmin->givePermissionTo('delete-users');

        $roleAdmin = Role::findByName('manager');
        $roleAdmin->givePermissionTo('see-project');
        $roleAdmin->givePermissionTo('store-project');
        $roleAdmin->givePermissionTo('patch-project');
        $roleAdmin->givePermissionTo('delete-project');
        $roleAdmin->givePermissionTo('see-daily-report');
        $roleAdmin->givePermissionTo('store-daily-report');
        $roleAdmin->givePermissionTo('patch-daily-report');

        $roleAdmin = Role::findByName('employee');
        $roleAdmin->givePermissionTo('see-daily-activity');
        $roleAdmin->givePermissionTo('store-daily-activity');
        $roleAdmin->givePermissionTo('patch-daily-activity');
        $roleAdmin->givePermissionTo('delete-daily-activity');


    }
}
