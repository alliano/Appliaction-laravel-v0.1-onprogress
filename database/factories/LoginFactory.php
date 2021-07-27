<?php

namespace Database\Factories;

use App\Models\Login;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Login::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'UserName' => $this->faker->username(),
           'password' => 'alliano' 
        ];
    }
}