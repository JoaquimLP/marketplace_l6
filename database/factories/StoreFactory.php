<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'descricao' => $this->faker->sentence,
            'telefone' => $this->faker->phoneNumber,
            'celular' => $this->faker->phoneNumber,
            'slug' => $this->faker->slug,
            'user_id' => 1,
        ];
    }
}
