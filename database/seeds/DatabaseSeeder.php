<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(DecisionsTableSeeder::class);
        $this->call(FactorsTableSeeder::class);
        $this->call(GuardiansTableSeeder::class);
        $this->call(RelationshipsTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(GuardiansTableSeeder::class);
        $this->call(RelativesTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
    }
}
