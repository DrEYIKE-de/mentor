<?php

namespace Database\Factories;

use App\Models\Faculte;
use App\Models\Universite;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaculteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Faculte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'universite_id'=> Universite::all()->random()->id,
            'name'=> $this->faker->jobTitle,
            'directeur'=> $this->faker->name
        ];
    }
}
