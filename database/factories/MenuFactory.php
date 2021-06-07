<?php

namespace Database\Factories;

use App\Models\Menu;
use App\Models\MenuGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Menu::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'icon' => '<svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.6 289.9l-45.59 45.59v64.47c0 26.51-21.49 47.1-48 47.1h-64.47l-45.59 45.59c-18.75 18.74-49.14 18.74-67.88 0l-45.59-45.59H111.1c-26.51 0-48-21.49-48-47.1v-64.47L18.41 289.9c-18.75-18.75-18.75-49.14 0-67.88L64 176.43v-64.47c0-26.51 21.49-47.1 48-47.1h64.47l45.59-45.59c18.75-18.75 49.14-18.75 67.88 0l45.59 45.59H400c26.51 0 48 21.49 48 47.1v64.47l45.59 45.59c18.71 18.78 18.71 49.18.01 67.88z"/></svg>',
            'route' => ['home', 'dashboard'][mt_rand(0,1)],
        ];
    }
}
