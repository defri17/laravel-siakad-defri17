<?php

namespace Database\Seeders;

use App\Models\Schedule ;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Schedule::factory(100)->create();
        // Subject::factory(100)->create();
  
        
  
    }
}
