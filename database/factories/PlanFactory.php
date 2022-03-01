<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plan>
 */
class PlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lectures' => json_encode([
                1 => '200', // lecture_id -> sort
                2 => '100',
                3 => '300',
                4 => '400',
                5 => '500',
                6 => '800',
                7 => '600',
                8 => '700',
                9 => '900',
                10 => '1000',
            ]),
            'group_id' => Group::all()->random()->id
        ];
    }
}
