<?php

namespace Database\Factories\Shows;

use App\Models\Category\Category;
use App\Models\Shows\Episodes;
use App\Models\Shows\Seasons;
use App\Models\Shows\Shows;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShowsFactory extends Factory
{
    protected $model = Shows::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'banner' => $this->faker->imageUrl(),
            'desc' => $this->faker->text(),
            'tags' => $this->faker->words(10),
            'display_image' => $this->faker->imageUrl(),
            'categories_id' => Category::factory(1)->state([
                'type' => 'show',
            ])->create()->first(),

        ];
    }
}