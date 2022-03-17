<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		$total = $this->faker->randomFloat;
		$tax = $total * 0.05;
		$amount = $total + $tax;
		return [
			'customer_id' => rand(1, 100),
			'type' => 1,
			'employee_id' => rand(1, 100),
			'email' => $this->faker->email,
			'receiver' => $this->faker->name,
			'destination' => $this->faker->address,
			'phone' => $this->faker->phoneNumber,
			'sub_total' => $total,
			'tax' => $tax,
			'amount' => $amount,
			'payment' => $this->faker->randomElement($array = array('線上付款', '貨到付款', '支票')),
			'shipping' => $this->faker->randomElement($array = array('快遞到府', '店到店', '超商自取', '面交')),
			'valid' => true,
			'closed' => false,
		];
	}
}
