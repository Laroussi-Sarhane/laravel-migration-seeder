<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\train;
use Illuminate\Support\Str;


class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(Faker $faker): void
    {
        for($i=0;$i<100;$i++){
            $new_train= new Train();
            $new_train->company= $faker->company();
            $new_train->station_departures= $faker->city();
            $new_train->station_destination= $faker->city();
            $new_train->departures_time= $faker->time();
            $new_train->arrivals_time= $faker->time();
            $new_train->slug= $this->getSlugUni($new_train->company,$new_train->train_code);
            $new_train->train_code= $faker->numberBetween(5, 20);
            $new_train->number_of_hangar= $faker->boolean();
            $new_train->at_time= $faker->boolean();
            $new_train->delayed= $faker->boolean();

            $new_train->save();

        }
    }
    private function getSlugUni($company, $code){

        $stringToSlug = $company . '-' . $code;

        $slug = Str::slug($stringToSlug,'-');
        $original_slug= $slug;

        $exist= train::where('slug', $slug)->first();

        $counter=1;

        while($exist){
            $slug= $original_slug.$counter;
            $exist= train::where('slug', $slug)->first();
            $counter++;
        }

        return $slug;


    }


}




