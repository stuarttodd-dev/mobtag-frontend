<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(ProjectsSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(ServicesSeeder::class);
    }
}
