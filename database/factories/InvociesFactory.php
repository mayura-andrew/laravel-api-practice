<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use database\factories\CustomersFactory;
use App\Models\Invocies;
use App\Models\Customer;
class InvociesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['PENDING', 'PAID', 'CANCELLED']);
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->randomNumber(),
            'status' => $status,
            'billed_date' => $this->faker->dateTime(),
            'paid_date' => $status === 'PAID' ? $this->faker->dateTime() : NULL,  
        ];
    }
}
