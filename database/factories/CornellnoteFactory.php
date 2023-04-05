<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Topic;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cornellnote>
 */
class CornellnoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $topic_id = Topic::all();

        return [
            'titulo'=>fake()->sentence(),
            'PalabrasClave'=>fake()->sentence(),
            'Texto'=>fake()->sentence(),
            'Conclusion'=>fake()->sentence(),
            'topic_id'=>$topic_id->random()
        ];
    }
}