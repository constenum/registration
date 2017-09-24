<?php

use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seeds = ['Aunt', 'Cousin', 'Father', 'Grandmother', 'Grandfather', 'Legal Guardian', 'Mother', 'Niece', 'Sister', 'Step-Father', 'Step-Mother'];

        foreach ($seeds as $seed) {
            $relationship = new \App\Relationship();
            $relationship->relationship = $seed;
            $relationship->save();
        }
    }
}
