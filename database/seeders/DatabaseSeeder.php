<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chef;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Menu;
use App\Models\Cart;
use App\Models\FoodOrder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        User::factory()->count(10)->create();
        Chef::factory()->count(5)->create();
        Menu::factory()->count(20)->create();
        Cart::factory()->count(30)->create();
        FoodOrder::factory()->count(15)->create();
        Reservation::factory()->count(15)->create();
    }
}
