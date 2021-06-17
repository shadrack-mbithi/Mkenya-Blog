<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //The edited data to the blogpost
            'title' => $this->faker->sentence, //Generates a fake sentence
            'body' => $this->faker->paragraph(30), //generates fake 30 paragraphs
            'comments' => $this->faker->paragraph(30),//Generates fake 30 comments
            //'user_id' => User::factory() //Generates a User from factory and extracts id
        ];
    }
}
