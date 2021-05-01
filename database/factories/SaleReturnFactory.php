<?php

namespace Database\Factories;

use App\Models\SaleReturn;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaleReturnFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SaleReturn::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice_number'=>$this->faker->numberBetween(1000,562148),

            ' Date'=>$this->faker->date('Y-m-d','now'),
            'Business Location'=>$this->faker->address(),
            'Customer'=>$this->faker->sentence(1),

            'total_amount'=>$this->faker->numberBetween(10000,50000),
            'paying_amount'=>$this->faker->numberBetween(10000,50000),
            ' payment_status'=>$this->faker->sentence(1),

            'due'=>$this->faker->sentence(1),

            //
        ];
    }
}
