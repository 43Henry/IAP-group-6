<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Student::factory() -> count(10) -> create();
        Student::create
        ([
            'id' => '1',
            'name' => 'Henry', 
            'course_id' => '31',
            'student_year' => '2',
            'unit_marks' => json_encode
            ([
                'IAP' => '50',
                'AN' => '100'
            ]),
        ]);
    }
}
