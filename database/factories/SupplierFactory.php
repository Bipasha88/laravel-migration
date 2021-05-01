<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->word(),
        'business_name'=>$this->faker->sentence(1),
        'email'=>$this->faker->email(),
        'mobile'=>$this->faker->e164PhoneNumber(),
        'city'=>$this->faker->city(),
        'zip'=>$this->faker->word(),
        'country'=>$this->faker->country(),
        'note'=>$this->faker->realText(100, 3),
            //
        ];
    }
}
