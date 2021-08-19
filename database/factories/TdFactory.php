<?php

namespace Database\Factories;

use App\Models\Cours;
use App\Models\Td;
use Illuminate\Database\Eloquent\Factories\Factory;

class TdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Td::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'cours_id'=> Cours::all()->random()->id,
           'title'=>$this->faker->sentence,
           'body'=>$this->faker->paragraphs(5,true),
        ];
    }
}
