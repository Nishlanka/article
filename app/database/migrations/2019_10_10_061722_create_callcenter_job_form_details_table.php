<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterJobFormDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_job_form_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('assessorjobid');
			$table->float('acr', 12);
			$table->float('pav', 12);
			$table->string('consiststatus', 80)->default('0');
			$table->boolean('statement');
			$table->boolean('policy');
			$table->float('mileage', 12);
			$table->timestamps();
			$table->softDeletes();
			$table->index(['id','assessorjobid'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_job_form_details');
	}

}
