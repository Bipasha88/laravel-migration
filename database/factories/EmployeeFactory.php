<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_name'=>$this->faker->sentence(2),
            'designation'=>$this->faker->sentence(1),
            'business'=>$this->faker->sentence(1),
            'email'=>$this->faker->email(),
            'mobile'=>$this->faker->e164PhoneNumber(),
            'nid_number'=>$this->faker->numberBetween(12560,45683),
            'picture'=>$this->faker->imageUrl($width = 640, $height = 480),
            'address'=>$this->faker->address(),
            'joining_date'=>$this->faker->date('Y-m-d','now'),
            'salary'=>$this->faker->numberBetween(10000,40000),
            'business_id'=>$this->faker->numberBetween(1,10),

            //
        ];
    }
}
