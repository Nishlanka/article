<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterJobsLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_jobs_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('claim_id')->nullable();
			$table->integer('job_id')->nullable();
			$table->enum('source', array('web','mobile'));
			$table->text('log_description', 65535)->nullable();
			$table->integer('job_status');
			$table->text('reason', 65535)->nullable();
			$table->timestamps();
			$table->index(['id','claim_id','job_id','created_at'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_jobs_log');
	}

}
