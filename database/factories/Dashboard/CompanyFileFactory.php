<?php

namespace Database\Factories\Dashboard;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Dashboard\Company;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyFile>
 */
class CompanyFileFactory extends Factory
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
            'company_id'=> Company::factory()->create()->id,
            'filename' => $this->faker->word . '.pdf', // Example file name
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),

        ];
    }
}
