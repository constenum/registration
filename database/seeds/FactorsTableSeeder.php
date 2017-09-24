<?php

use Illuminate\Database\Seeder;

class FactorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['Academic Reputation', 'Athletic Programs', 'Catholic Beliefs', 'Single Sex', 'Convenient Location', 'Family Member Attended', 'Financial Assitance', 'Friends Attend',
            'Other', 'School Spirit'];

        foreach ($seeds as $seed) {
            $factor = new \App\Factor();
            $factor->factor = $seed;
            $factor->save();
        }
    }
}
