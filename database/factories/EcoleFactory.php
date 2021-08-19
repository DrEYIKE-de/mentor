<?php

namespace Database\Factories;

use App\Models\Ecole;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EcoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ecole::class;

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
            'description'=>$this->faker->text,
            'avatar'=>$this->faker->url,
            'image'=>$this->faker->url
        ];
    }
}
