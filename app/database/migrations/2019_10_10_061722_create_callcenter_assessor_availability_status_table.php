<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterAssessorAvailabilityStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_assessor_availability_status', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('status', 45)->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->dateTime('timestamp')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_assessor_availability_status');
	}

}
