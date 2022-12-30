<?php

namespace Database\Factories;

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
            'student_id' => $this->faker->numberBetween(1,10000),
            'course_name' => $this->faker->name, 'stu_year' => rand(1, 7),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'stu_marks' => rand(1, 700),
            'unit_id' => $this->faker->numberBetween(1,1000),
        ];
    }
}
