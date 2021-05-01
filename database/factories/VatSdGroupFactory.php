<?php

namespace Database\Factories;

use App\Models\VatSdGroup;
use Illuminate\Database\Eloquent\Factories\Factory;

class VatSdGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VatSdGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(1),
            'percentage'=>$this->faker->numberBetween(5, 50),
            //
        ];
    }
}
