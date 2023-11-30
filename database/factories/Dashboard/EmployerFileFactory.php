<?php

namespace Database\Factories\Dashboard;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dashboard\Employer;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmployerFile>
 */
class EmployerFileFactory extends Factory
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
            'employer_id'=> Employer::factory()->create()->id,
            'filename' => $this->faker->word . '.pdf', // Example file name
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),

        ];
    }
}
