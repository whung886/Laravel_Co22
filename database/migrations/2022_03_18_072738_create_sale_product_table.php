<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleProductTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sale_product', function (Blueprint $table) {
			$table->id();
			$table->foreignId('sale_id')->constrained();
			$table->foreignId('product_id')->constrained();
			$table->decimal('unit_price', 18, 2);
			$table->integer('qty');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		schema::table('sale_product', function (Blueprint $table) {
			$table->dropForeign(['sale_id']);
			$table->dropForeign(['product_id']);
		});

		Schema::dropIfExists('sale_product');
	}
}
