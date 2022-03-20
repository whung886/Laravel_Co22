<?php

namespace Database\Seeders;

use App\Models\SaleProduct;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SaleProductSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		SaleProduct::truncate();
		//建立新資料
		SaleProduct::factory()->times(20)->create();
	}
}
