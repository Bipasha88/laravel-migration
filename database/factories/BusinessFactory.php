<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(1),
            'email'=>$this->faker->email(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->state(),
            'zip'=>$this->faker->sentence(1),
            'country'=>$this->faker->country(),
            'mobile'=>$this->faker->e164PhoneNumber(),
            'website'=>$this->faker->url(),

            //
        ];
    }
}
