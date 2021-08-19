<?php

namespace Database\Factories;

use App\Models\Code;
use App\Models\Filiere;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class CodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Code::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'code'=>$this->faker->randomNumber(7),
        ];
    }
    
}
