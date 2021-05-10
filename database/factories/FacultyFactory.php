<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacultyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faculty::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>'Faculty of '.$this->faker->realText($maxNbChars = 30, $indexSize = 1),
            'address'=>$this->faker->streetAddress.' '.$this->faker->city,
            'scientific_field'=>$this->faker->realText($maxNbChars = 40, $indexSize = 4),
            'university_id'=>$this->faker->numberBetween($min = 1, $max = 20)
        ];
    }
}
