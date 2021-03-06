<?php

namespace Database\Seeders;

use DB;
use Eloquent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		Eloquent::unguard();

		//disable foreign key check for this connection before running seeders
		$this->setFKCheckOff();
		$this->call([
			CartSeeder::class,
			CategorySeeder::class,
			CustomerSeeder::class,
			EmployeeSeeder::class,
			SupplierSeeder::class,
			ProductSeeder::class,
			OrderSeeder::class,
			OrderProductSeeder::class,
			ProcurementSeeder::class,
			ProcurementProductSeeder::class,
			SaleSeeder::class,
			ProductSaleSeeder::class,
		]);
		//enable foreign key check for this connection before running seeders
		$this->setFKCheckOn();
		Eloquent::reguard();
	}

	private function setFKCheckOff() {
		switch (DB::getDriverName()) {
		case 'mysql':
			DB::statement('SET FOREIGN_KEY_CHECKS=0');
			break;
		case 'sqlite':
			DB::statement('PRAGMA foreign_keys = OFF');
			break;
		}
	}

	private function setFKCheckOn() {
		switch (DB::getDriverName()) {
		case 'mysql':
			DB::statement('SET FOREIGN_KEY_CHECKS=1');
			break;
		case 'sqlite':
			DB::statement('PRAGMA foreign_keys = ON');
			break;
		}
	}
}