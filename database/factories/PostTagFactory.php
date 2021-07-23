<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => function () {
                return Post::all()->random();
            },
            'tag_id' =>function () {
                return Tag::all()->random();
            },
            'status'=>$this->faker->randomElement(['active', 'inactive']),
        ];
    }
}
