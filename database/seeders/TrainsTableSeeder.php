<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\train;
use Illuminate\Support\str;



class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $new_train= new Train();
        $new_train->company= 'italo';
        $new_train->station_departures= 'bs';
        $new_train->station_destination= 'bs';
        $new_train->departures_time= '10:15';
        $new_train->arrivals_time= '10:15';
        $new_train->slug= 'italo';
        $new_train->train_code= 'italo';
        $new_train->number_of_hangar= 'italo';
        $new_train->at_time= 'italo';
        $new_train->delayed= 'italo';
        $new_train->nation= 'italo';
        $new_train->save();



















    }
}
