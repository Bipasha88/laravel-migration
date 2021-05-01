<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(1),
            'business_name'=>$this->faker->sentence(2),
            'email'=>$this->faker->email(),
            'mobile'=>$this->faker->e164PhoneNumber(),
            'city'=>$this->faker->city(),
            'zip'=>$this->faker->sentence(1),
            'country'=>$this->faker->country(),
            'customer_group'=>$this->faker->sentence(2),
            'customer_group_id'=>$this->faker->numberBetween(1,10),
            'note'=>$this->faker->realText(100, 3),
            //
        ];
    }
}
