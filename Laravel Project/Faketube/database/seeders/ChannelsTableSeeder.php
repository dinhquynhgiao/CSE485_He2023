<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        for ($i=0;$i<50;$i++)
        {
            DB::table('channels')->insert([
                'id'=>$i+1,
                'Name'=>$faker->name,
                'Description'=>$faker->sentence,
                'SubscribersCount'=>$faker->randomNumber(2,10000),
                'URL'=>$faker->url(),
                'created_at' => now(),
                'updated_at' => now(),

            ]);
        }
    }
}
