<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('employees', function (Blueprint $table) {
			$table->id();
			$table->string('emp_name_c', 50);
			$table->string('emp_name_e', 50)->nullable();
			$table->bigInteger('department_id');
			$table->bigInteger('rank_id');
			$table->char('emp_id_no', 20);
			$table->date('birth');
			$table->char('gender', 1);
			$table->string('addr', 250);
			$table->string('emp_state', 20)->nullable();
			$table->string('emp_country', 20)->nullable();
			$table->string('emp_zip', 10);
			$table->string('emp_tel', 20);
			$table->string('emp_email', 50);
			$table->bigInteger('emp_status');
			$table->string('userid', 50);
			$table->string('pwd', 100);
			$table->string('valid_code', 50);
			$table->string('emer_contact', 20)->nullable();
			$table->string('emer_tel', 20)->nullable();
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
		Schema::dropIfExists('employees');
	}
}