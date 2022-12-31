<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Student::class;

    public function definition()
    {
        return 
        [
            'student_id' => '1',
            'name' => 'Henry', 
            'course_id' => '31',
            'student_year' => '2',
            'unit_marks' => 'hello',
        ];
    }
}
