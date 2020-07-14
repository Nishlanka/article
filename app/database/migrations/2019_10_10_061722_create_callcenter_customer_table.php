<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_customer', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('vehicle_no', 20)->nullable();
			$table->string('policy_period', 50);
			$table->string('policy_no', 25);
			$table->string('sum_insured', 11);
			$table->string('year', 20);
			$table->string('causes', 11);
			$table->string('make', 25);
			$table->text('branch', 65535)->index('brr');
			$table->text('customer_name', 65535);
			$table->string('policy_status', 11);
			$table->timestamps();
			$table->softDeletes();
			$table->string('chassis_number', 45)->nullable();
			$table->index(['id','vehicle_no','policy_no','chassis_number'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_customer');
	}

}
