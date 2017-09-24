<?php

use Illuminate\Database\Seeder;
use App\School;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class SchoolsTableSeeder extends Seeder
{
    public function run()
    {
        $schools = [
            ['All Saints', 'Rossford'],
            ['Blessed Sacrament', 'Toledo'],
            ['Christ the King', 'Toledo'],
            ['Gesu', 'Toledo'],
            ['Holy Trinity', 'Swanton'],
            ['Lial Catholic School', 'Whitehouse'],
            ['Notre Dame Junior Academy', 'Toledo'],
            ['Our Lady of Perpetual Help', 'Toledo'],
            ['Queen of Apostles', 'Toledo'],
            ['Regina Coeli', 'Toledo'],
            ['Rosary Cathedral', 'Toledo'],
            ['St. Aloysius', 'Bowling Green'],
            ['St. Benedict', 'Toledo'],
            ['St. Joan of Arc', 'Toledo'],
            ['St. Joesph', 'Erie'],
            ['St. Joseph', 'Maumee'],
            ['St. Joseph', 'Sylvania'],
            ['St. Patrick of Heatherdowns', 'Toledo'],
            ['St. Pius', 'Toledo'],
            ['St. Richard', 'Swanton'],
            ['St. Rose', 'Perrysburg'],
            ['St. Ursula Junior Academy', 'Toledo'],
            ['Stritch Academy', 'Oregon']
        ];

        foreach ($schools as $school) {
            $school = School::create([
                'school' => $school[0],
                'city' => $school[1]
            ]);
        }
    }
}
