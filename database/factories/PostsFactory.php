<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
            $url = "www.google.com";
        return [
            'userId' => $this->faker->randomDigit(),
            'approved' => $this->faker->boolean(),
            'categoryID' => $this->faker->randomDigit(),
            'title' => $this->faker->title,
            'content' => $url
        ];
    
    }
}
