<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcurementsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('procurements', function (Blueprint $table) {
			$table->id();
			$table->foreignId('supplier_id')->constrained();
			$table->string('originator', 100);
			$table->bigInteger('employee_id');
			$table->char('type', 1)->default("1");
			$table->string('invoice', 20);
			$table->decimal('sub_total', 18, 2);
			$table->decimal('discount', 18, 2)->nullable(0);
			$table->decimal('tax', 18, 2)->nullable(0);
			$table->decimal('paid_amount', 18, 2)->nullable(0);
			$table->string('payment', 20)->nullable();
			$table->string('shipping_state')->nullable();
			$table->bigInteger('approved_by')->nullable();
			$table->text('remark')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('procurements', function (Blueprint $table) {
			$table->dropForeign(['supplier_id']);
		});

		Schema::dropIfExists('procurements');
	}
}