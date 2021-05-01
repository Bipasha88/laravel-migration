<?php

namespace Database\Factories;

use App\Models\PurchaseOrder;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchaseOrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PurchaseOrder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'supplier_name'=>$this->faker->sentence(1),
            'invoice_no'=>$this->faker->numberBetween(1,10),
            'purchase_date'=>$this->faker->date('Y-m-d','now'),
            'business_location'=>$this->faker->address(),
            'attach_file'=>$this->faker->mimeType(),
            'note'=>$this->faker->realText(100, 3),
            'supplier_id'=>$this->faker->numberBetween(1,10),

            //
        ];
    }
}
