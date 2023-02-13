<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition():array
    {
        return [
            'name'=> $this->faker->company(),
            'img'=> $this->faker->imageUrl(),
        ];
    }
}
