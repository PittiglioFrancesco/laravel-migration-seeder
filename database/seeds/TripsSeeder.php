<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $trip = new Trip();

       $trip->id = 1;
       $trip->name = 'Dubai';
       $trip->departure = '2020-12-10';
       $trip->return = '2020-12-22';
       $trip->price = 500.49;

       $trip->save();

    }
}
