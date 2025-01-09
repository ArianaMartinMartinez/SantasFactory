<?php

namespace Database\Seeders;

use App\Models\Kid;
use App\Models\Toy;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\KidSeeder;
use Database\Seeders\ToySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(KidSeeder::class);
        $this->call(ToySeeder::class);
    }
}
