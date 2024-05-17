<?php

namespace Database\Seeders;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()
        ->count(1)
        ->create();
        // Order::factory()
        // ->count(10)
        // ->create();
        // Item::factory()
        // ->count(10)
        // ->create();
    }
}
