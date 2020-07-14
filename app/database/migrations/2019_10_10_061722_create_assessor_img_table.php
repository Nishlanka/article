<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAssessorImgTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assessor_img', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('job_id');
			$table->string('assessor_code', 50);
			$table->integer('no_of_img');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('assessor_img');
	}

}
