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
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'create-threads']);
        Permission::create(['name' => 'edit-threads']);
        Permission::create(['name' => 'delete-threads']);

        Permission::create(['name' => 'delete-comments']);
        Permission::create(['name' => 'edit-comments']);

        Permission::create(['name' => 'create-sexes']);
        Permission::create(['name' => 'edit-sexes']);
        Permission::create(['name' => 'delete-sexes']);

        Permission::create(['name' => 'create-categories']);
        Permission::create(['name' => 'edit-categories']);
        Permission::create(['name' => 'delete-categories']);

        Permission::create(['name' => 'create-subcategories']);
        Permission::create(['name' => 'edit-subcategories']);
        Permission::create(['name' => 'delete-subcategories']);

        Permission::create(['name' => 'add-to-favorites']);
        Permission::create(['name' => 'add-animated-pfp']);


        $rootRole = Role::create(['name' => 'root']);
        $sigmaRole = Role::create(['name' => 'sigma']);
        $alfaRole = Role::create(['name' => 'alfa']);
        $betaRole = Role::create(['name' => 'beta']);
        $deltaRole = Role::create(['name' => 'delta']);
        $gammaRole = Role::create(['name' => 'gamma']);
        $omegaRole = Role::create(['name' => 'omega']);

        $rootRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'create-threads',
            'edit-threads',
            'delete-threads',
            'delete-comments',
            'edit-comments',
            'create-sexes',
            'edit-sexes',
            'delete-sexes',
            'create-categories',
            'edit-categories',
            'delete-categories',
            'create-subcategories',
            'edit-subcategories',
            'delete-subcategories',
            'add-to-favorites',
            'add-animated-pfp'
        ]);
        $sigmaRole->givePermissionTo([
            'edit-users',
            'delete-users',
            'create-threads',
            'edit-threads',
            'delete-threads',
            'delete-comments',
            'edit-comments',
            'add-to-favorites',
            'add-animated-pfp'
        ]);

        $alfaRole->givePermissionTo([
            'create-threads',
            'add-animated-pfp',
            'add-to-favorites',
        ]);

        $betaRole->givePermissionTo([
            'create-threads',
            'add-to-favorites',
        ]);

        $deltaRole->givePermissionTo([
            'create-threads',
            'add-to-favorites',
        ]);

        $gammaRole->givePermissionTo([
            'create-threads',
            'add-to-favorites',
        ]);

        $omegaRole->givePermissionTo([
            'create-threads',
            'add-to-favorites',
        ]);

    }
}
