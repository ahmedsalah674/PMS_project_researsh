<?php

use Illuminate\Database\Seeder;
use App\Delivery;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Delivery::truncate();   
      Delivery::create([
            'name' => 'Delivery1',
            'salary' => '1000',
          ]);
            $this->call(UsersTableSeeder::class);
    }
}
