<?php

namespace Database\Factories;

use App\Models\Universite;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UniversiteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Universite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id,
            'name'=>$this->faker->company,
            'rector'=>$this->faker->name,
            'address'=>$this->faker->address,
            'description'=>$this->faker->paragraphs(7,true),
            'avatar'=>$this->faker->text,
            'image'=>$this->faker->text
        ];
    }
}
