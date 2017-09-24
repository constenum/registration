<?php

use Illuminate\Database\Seeder;

class DecisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['Student', 'Parent', 'Both'];

        foreach ($seeds as $seed) {
            $decision = new \App\Decision();
            $decision->decision = $seed;
            $decision->save();
        }
    }
}
