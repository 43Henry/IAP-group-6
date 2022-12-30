<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Student::factory() -> count(10) -> create();
        Student::create
        ([
            'student_id' => $this->faker->numberBetween(1,10000),
            'course_name' => $this->faker->name, 'stu_year' => rand(1, 7),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'stu_marks' => rand(1, 700),
            'unit_id' => $this->faker->numberBetween(1,1000),
        ]);
    }
}
