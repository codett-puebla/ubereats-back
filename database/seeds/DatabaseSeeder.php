<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $restaurantQuantity = 100;
        $disQuantity = 200;

        factory(\App\restaurant::class, $restaurantQuantity)->create();
        factory(\App\dish::class, $disQuantity)->create()->each(
          function ($dish){
              $restaurants = \App\restaurant::all()->random(mt_rand(1, 5))->pluck('id');
              foreach ($restaurants as $restaurant){
                  $dish->restaurant()->associate($restaurant);
                  $dish->save();
              }
          }
        );

    }
}
