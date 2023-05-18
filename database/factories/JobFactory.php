<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create();
        $work_arrangements = [
            'Full Time', 'Part Time', 'Contract', 'Temporary', 'Internship', 'Volunteer', 'Other',
        ];
        $languages = [
            'PHP', 'Java', 'C++', 'Python', 'JavaScript', 'Ruby', 'C#', 'Go', 'Swift', 'Rust',
            'TypeScript', 'Perl', 'Haskell', 'Scala', 'Kotlin', 'Objective-C', 'Lua', 'MATLAB',
            'Groovy', 'R', 'Erlang', 'Dart', 'Julia', 'F#', 'Shell', 'VB.NET', 'Clojure', 'Delphi',
            'Fortran', 'Lisp'
        ];

        $selectedLanguages = $faker->randomElements($languages, $faker->numberBetween(3, 6));
        $selectedLanguages = serialize($selectedLanguages);


        $jobTitles = [
            'Front-End Developer',
            'Back-End Developer',
            'Full Stack Developer',
            'JavaScript Developer',
            'PHP Developer',
            'Python Developer',
            'Ruby on Rails Developer',
            'UI/UX Developer',
            'WordPress Developer',
            'E-commerce Developer'
        ];


        return [
            'title' => $faker->unique()->randomElement($jobTitles),
            'work_arrangement' => $faker->randomElement($work_arrangements),
            'description' => $faker->paragraphs($faker->numberBetween(5, 10), true),
            'salary' => $faker->numberBetween(10000, 100000),
            'languages' => $selectedLanguages,
            'category_id' => Category::first()->id,
            'company_id' => Company::first()->id,
            'user_id' => User::first()->id,
        ];
    }
}
