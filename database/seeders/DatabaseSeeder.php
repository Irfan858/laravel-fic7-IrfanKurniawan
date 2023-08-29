<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Order;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\OrderSeeder;
use Database\Seeders\ProductSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\OrderItemSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Category::factory(5)->create();
        
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
        ]);
    }
}
