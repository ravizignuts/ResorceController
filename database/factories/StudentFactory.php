<?php

namespace Database\Factories;

use App\Models\Student;
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
        return [
            'student_id'=>'21MTECH'.$this->faker->unique()->numberBetween(1,100),
            'fname'=>$this->faker->name(),
            'gender'=>$this->faker->randomElement(['Male','Female']),
            'dob'=>$this->faker->date('d-m-y'),
            'sem'=>$this->faker->numberBetween(1,4),
            'course'=>'M.Tech'//$this->faker->randomElement(['BCA','MCA','Msc.IT','Bsc.IT','B.Tech','M.tech'])

        ];
    }
}
