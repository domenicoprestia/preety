<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factories\Factory $factory */ 

use App\Models\Preet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PreetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'body' => $this->faker->sentence()
        ];
    }
}
