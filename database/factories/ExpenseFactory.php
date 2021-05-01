<?php

namespace Database\Factories;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpenseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Expense::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date'=>$this->faker->date('Y-m-d','now'),
            'expense_category'=>$this->faker->sentence(1),
            'business_location'=>$this->faker->address(),
            'payment_type'=>$this->faker->creditCardType(),
            'amount'=>$this->faker->numberBetween(10000,20000),
            'note'=>$this->faker->realText(100, 3),
            'expense_category_id'=>$this->faker->numberBetween(1,10),
            //
        ];
    }
}
