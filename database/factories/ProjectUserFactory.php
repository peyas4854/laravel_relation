<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\ProjectUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'project_id' => $this->faker->numberBetween($min=1,$max=3),
             'user_id' => $this->faker->numberBetween($min=1,$max=10),
        ];
    }
}
