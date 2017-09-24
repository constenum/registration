<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['8th Grade Visit', 'Family', 'Friend', 'Individual Vist', 'Local Paper', 'Mailing', 'Open House', 'Other', 'Radio', 'Television', 'Website'];

        foreach ($seeds as $seed) {
            $about = new \App\About();
            $about->about = $seed;
            $about->save();
        }
    }
}
