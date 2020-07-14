<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterAssessorJobHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_assessor_job_history', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->integer('assessor_id')->index('asid');
			$table->dateTime('updated_at')->nullable();
			$table->string('status', 45);
			$table->integer('callcenter_assessors_jobs_id')->index('cl_ass_id');
			$table->float('lat', 10, 0)->nullable();
			$table->float('lng', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_assessor_job_history');
	}

}
