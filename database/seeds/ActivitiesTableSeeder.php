<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['Art', 'Band', 'Choir', 'Christian Services', 'Instrument', 'Musical', 'Orchestra', 'STEM'];

        foreach ($seeds as $seed) {
            $activity = new \App\Activity();
            $activity->activity = $seed;
            $activity->save();
        }
    }
}
