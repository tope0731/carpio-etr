<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            ['name' => 'Bachelor of Elementary Education', 'campus' => 'alaminos'],
            ['name' => 'Bachelor of Secondary Education', 'campus' => 'alaminos'],
            ['name' => 'BS Business Administration', 'campus' => 'alaminos'],
            ['name' => 'BS Hospitality Management', 'campus' => 'alaminos'],
            ['name' => 'BS Information Technology', 'campus' => 'alaminos'],
        ];
        
        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
