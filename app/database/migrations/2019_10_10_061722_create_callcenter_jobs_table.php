<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_jobs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->integer('jobtype_id');
			$table->integer('claim_id');
			$table->integer('district_id')->index('fk_jobs_districts1_idx');
			$table->integer('city_id')->index('fk_jobs_cities1_idx');
			$table->float('lat', 18, 14)->nullable();
			$table->float('lng', 18, 14)->nullable();
			$table->text('comments', 65535)->nullable();
			$table->boolean('onlinestate');
			$table->integer('completed_callcenter_user')->nullable();
			$table->timestamps();
			$table->softDeletes();
			$table->timestamp('timestamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->integer('callcenter_jobs_status_type_id');
			$table->integer('callcenter_user')->nullable();
			$table->string('job_no', 45)->nullable();
			$table->index(['id','user_id','jobtype_id','claim_id','completed_callcenter_user','created_at','job_no','callcenter_jobs_status_type_id','callcenter_user'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_jobs');
	}

}
