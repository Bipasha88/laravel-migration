<?php

namespace Database\Factories;

use App\Models\InvoiceItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InvoiceItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product'=>$this->faker->sentence(1),
            'quantity'=>$this->faker->numberBetween(1, 100),
            'product_id'=>$this->faker->numberBetween(1, 10),

            //
        ];
    }
}
