<?php

use Illuminate\Database\Seeder;

class SportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['Basketball', 'Bowling', 'Crew', 'Cross Country', 'Dance', 'Diving', 'Golf', 'Gymnastics', 'Lacrosse', 'Soccer', 'Softball', 'Swimming', 'Tennis', 'Track', 'Volleyball'];

        foreach ($seeds as $seed) {
            $sport = new \App\Sport();
            $sport->sport = $seed;
            $sport->save();
        }
    }
}
