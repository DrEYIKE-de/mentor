<?php

namespace Database\Factories;

use App\Models\Matiere;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Matiere::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'niveau_id'=>Niveau::all()->random()->id,
            'name'=>$this->faker->sentence,
           
        ];
    }
}
