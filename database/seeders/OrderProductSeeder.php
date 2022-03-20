<?php

namespace Database\Seeders;

use App\Models\OrderProduct;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderProductSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		OrderProduct::truncate();
		//建立新資料
		OrderProduct::factory()->times(50)->create();
	}
}
