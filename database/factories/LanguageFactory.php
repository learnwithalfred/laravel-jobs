<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $languages = [
            'PHP', 'Java', 'C++', 'Python', 'JavaScript', 'Ruby', 'C#', 'Go', 'Swift', 'Rust',
            'TypeScript', 'Perl', 'Haskell', 'Scala', 'Kotlin', 'Objective-C', 'Lua', 'MATLAB',
            'Groovy', 'R', 'Erlang', 'Dart', 'Julia', 'F#', 'Shell', 'VB.NET', 'Clojure', 'Delphi',
            'Fortran', 'Lisp'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($languages)
        ];
    }
}
