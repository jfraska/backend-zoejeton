<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TemplateSeeder::class,
            UserSeeder::class,
            InvitationSeeder::class,
            GroupSeeder::class,
            GuestSeeder::class,
        ]);
    }
}
