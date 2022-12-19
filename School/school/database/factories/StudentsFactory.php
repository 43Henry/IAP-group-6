<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DB;
use Faker\Factory as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Students::class;

    public function definition()
    {
        $faker = Faker::create();
        DB::table('students') -> insert
        ([
            'student_id' => $faker -> unique -> word(),
            'course_name' => $faker -> name(),
            'stu_year' => rand(1, 7),
            'first_name' => $faker -> name(),
            'last_name' => $faker -> name(),
            'stu_marks' => rand(1, 700),
            'unit_id' => $faker -> unique -> name(),
        ]);
    }
}
