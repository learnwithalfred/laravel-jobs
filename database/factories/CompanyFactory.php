<?php

namespace Database\Factories;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $companyNames = [
            "Acme Corporation",
            "Widget Industries",
            "Global Solutions",
            "Innovative Technologies",
            "Alpha Services",
            "Apex Systems",
            "Pinnacle Enterprises",
            "Starlight Ventures",
            "Sunrise Innovations",
            "Summit Group",
            "Zenith Co.",
            "Eagle Enterprises",
            "Prime Solutions",
            "Dynamic Industries",
            "MegaCorp",
            "AlphaOmega Ltd.",
            "Precision Engineering",
            "Spectrum Inc.",
            "Silverline Systems",
            "Vista Enterprises"
        ];

        return [
            'name' => $this->faker->unique()->randomElement($companyNames),
            'user_id' => User::first()->id,
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'website' => $faker->domainName,
            'logo' => $faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
