<?php

namespace Database\Factories;

use App\Models\Asset;
use Illuminate\Database\Eloquent\Factories\Factory;

class AssetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asset::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'asset_category' => $this->faker->sentence(2),
            'business_location'=> $this->faker->address(),
            'payment_type'=>$this->faker->sentence(1),
            'amount'=>$this->faker->numberBetween(1000, 50000),
            'note'=>$this->faker->realText(100, 3),
            'asset_category_id' => $this->faker->numberBetween(1, 10),

            //
        ];
    }
}
