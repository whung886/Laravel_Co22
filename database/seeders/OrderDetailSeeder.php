<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		OrderDetail::truncate();
		//建立新資料
		OrderDetail::factory()->times(50)->create();
	}
}
