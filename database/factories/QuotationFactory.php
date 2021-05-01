<?php

namespace Database\Factories;

use App\Models\Quotation;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuotationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quotation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'quotation_number'=>$this->faker->numberBetween(1,10),
            'date'=>$this->faker->date('Y-m-d','now'),
            'customer'=>$this->faker->sentence(1),
            'total_amount'=>$this->faker->numberBetween(10000,500000),
            'business_location'=>$this->faker->address(),
            'customer_id'=>$this->faker->numberBetween(1,10),
            //
        ];
    }
}
