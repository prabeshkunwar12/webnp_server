<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'view unapproved posts']);
        Permission::create(['name' => 'create posts']);
        Permission::create(['name' => 'approve posts']);
        Permission::create(['name' => 'edit own posts']);
        Permission::create(['name' => 'edit all posts']);
        Permission::create(['name' => 'delete own posts']);
        Permission::create(['name' => 'delete any post']);
        Permission::create(['name' => 'approve nurse account']);
        Permission::create(['name' => 'delete any account']);
        Permission::create(['name' => 'view discussion forum']);
        
        $SuperAdminRole = Role::create(['name' => 'SuperAdmin']);
        $AdminRole = Role::create(['name' => 'Admin']);
        $editorRole = Role::create(['name' => 'Editor']);
        $nurseRole = Role::create(['name' => 'Nurse Practioner']);
        $userRole = Role::create(['name' => 'User']);

        $SuperAdminRole->givePermissionTo([
            'view unapproved posts',
            'create posts',
            'approve posts',
            'edit own posts',
            'edit all posts',
            'delete own posts',
            'delete any post',
            'approve nurse account',
            'delete any account',
            'view discussion forum',
        ]);

        $AdminRole->givePermissionTo([
            'view unapproved posts',
            'create posts',
            'approve posts',
            'edit own posts',
            'edit all posts',
            'delete own posts',
            'delete any post',
            'approve nurse account',
            'delete any account',
            'view discussion forum',
        ]);


        $editorRole->givePermissionTo([
            'view unapproved posts',
            'create posts',
            'approve posts',
            'edit own posts',
            'edit all posts',
            'delete own posts',
            'delete any post',
            'view discussion forum',
        ]);

        $nurseRole->givePermissionTo([
            'create posts',
            'edit own posts',
            'view discussion forum',
        ]);

        $userRole->givePermissionTo([
            'view discussion forum',
        ]);
    }
}
