<?php

namespace Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Database\Seeders\UserSeeder as SeedersUserSeeder;
use Illuminate\Database\Seeder;
use RoleSeeder;
use UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $this->call(SeedersUserSeeder::class);
    }
}