<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterAssessorsJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_assessors_jobs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('job_id');
			$table->integer('assessor_id');
			$table->timestamps();
			$table->string('comments')->nullable();
			$table->softDeletes();
			$table->timestamp('timestamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('reason', 45);
			$table->integer('assessor_job_status_id')->default(1);
			$table->integer('delete_status')->default(1);
			$table->index(['job_id','assessor_id','created_at','assessor_job_status_id','timestamp'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_assessors_jobs');
	}

}
