<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     //   $this->call(YearSeeder::class);
        $this->call(UniversitySeeder::class);
        $this->call(AwardSeeder::class);
        $this->call(RecordsSeeder::class);
        
     
    }
}
