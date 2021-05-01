<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name'=>$this->faker->sentence(2),
            'barcode'=>$this->faker->ean13(),
            'unit'=>$this->faker->sentence(1),
            'category'=>$this->faker->sentence(1),
            'brand'=>$this->faker->sentence(1),
            'business_locations'=>$this->faker->sentence(1),
            'alert_quantity'=>$this->faker->numberBetween(1,60),
            'purchase_price'=>$this->faker->numberBetween(100,50000),
            'other_price'=>$this->faker->numberBetween(200, 60000),
            'selling_price'=>$this->faker->numberBetween(222, 74563),
            'picture'=>$this->faker->imageUrl($width = 640, $height = 480),
            'vat_sd_group'=>$this->faker->sentence(1),
            'discount_type'=>$this->faker->sentence(1),
            'discount'=>$this->faker->numberBetween(10,60),
            'product_description'=>$this->faker->realText(100, 3),
            'unit_id'=>$this->faker->numberBetween(1, 10),
            'category_id'=>$this->faker->numberBetween(1,10),
            'brand_id'=>$this->faker->numberBetween(1,10),
            'vat_sd_group_id'=>$this->faker->numberBetween(1,10)

            //
        ];
    }
}
