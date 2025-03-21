<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titulo' => $this->faker->sentence(5),
            'slug'=> $this->faker->slug(),
            'contenido' => $this->faker->text(400),
            'categoria' => $this->faker->word(),
            
        ];
    }
}
