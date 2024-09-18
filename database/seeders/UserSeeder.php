<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        $superadmin = User::create([
            'name'      => 'superadmin',
            'email'     => 'pilong@prepkev.id',
            'password'  => Hash::make('syhrld0ck'),
        ]

        );
        $superadmin->assignRole('superadmin');

        $redaktur = User::create([
            'name' => 'redaktur',
            'email' => 'redaktur@prepkev.id',
            'password' => Hash::make('r3d4ktuR'),
        ]);

        $redaktur->assignRole('redaktur');
    }
    
}
