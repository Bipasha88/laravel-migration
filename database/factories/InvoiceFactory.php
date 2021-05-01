<?php

namespace Database\Factories;

use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoice::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'invoice_number'=>$this->faker->numberBetween(1,10),
            'invoice_item'=>$this->faker->sentence(1,),
            'invoice_item_id'=>$this->faker->numberBetween(1,10),
            'sold_by'=>$this->faker->sentence(1,),
            'customer'=>$this->faker->sentence(1,),

            'date'=>$this->faker->date('Y-m-d','now'),
            'status'=>$this->faker->word(),
            'discount'=>$this->faker->numberBetween(10,70),
            'vat/tax'=>$this->faker->sentence(1,),
            //
        ];
    }
}
