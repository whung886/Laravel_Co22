<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'name' => $this->faker->name,
			'ear_no' => $this->faker->ean8,
			'eid' => $this->faker->ean13,
			'contact' => $this->faker->name,
			'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'gender' => $this->faker->randomElement($array = array('F', 'M')),
			'address' => $this->faker->address,
			'phone' => $this->faker->phoneNumber,
			'email' => $this->faker->email,
			'membership' => $this->faker->randomElement($array = array('臨時會員', '普通會員', '金質會員', '白金會員', '黑卡會員', '奥客')),
			'userid' => $this->faker->userName,
			'pwd' => $this->faker->password,
		];
	}
}
