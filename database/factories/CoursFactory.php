<?php

namespace Database\Factories;

use App\Models\Cours;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class CoursFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cours::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chap'=>$this->faker->randomDigit(30),
           'name'=>$this->faker->sentence,
           'image' => $this-> faker->url,
           'pdf' => $this ->faker->sentence,
           'matiere_id'=> Matiere::all()->random()->id
        ];
    }
}
