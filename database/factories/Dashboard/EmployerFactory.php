<?php

namespace Database\Factories\Dashboard;

use App\Models\Dashboard\jobTitle;
use App\Models\Dashboard\Nationality;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dashboard\Employer;




/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dashboard\Employer>
 */
class EmployerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Employer::class;

    public function definition(): array
    {
      return [
        'ar_name' => $this->faker->name(),
        'en_name' => $this->faker->name(),
        'phone' => $this->faker->phoneNumber(),
        'gender' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(),
        'job_title_id' =>  jobTitle::factory()->create()->id,
        'nationality_id' => Nationality::factory()->create()->id,

    ];

    } 
}
