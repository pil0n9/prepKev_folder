<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::updateOrCreate
        (
            [
            'name' => 'superadmin',
            'guard_name' => 'web'
            ]
        );

        Role::updateOrCreate
        (
            [
            'name' => 'redaktur',
            'guard_name' => 'web'
            ]
        );
    }
}