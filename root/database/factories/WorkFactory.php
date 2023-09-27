<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Work;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,5),
            'work_content' => $this->faker -> sentence,
            'comment' => $this->faker -> sentence,
            'date' => $this->faker -> date,
            'work_start_time' => $this->faker -> time,
            'work_end_time' => $this->faker -> time,
            'break_time' => $this->faker -> time,
            'status_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
