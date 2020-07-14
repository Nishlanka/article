<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLaravelJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('laravel_jobs', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('queue');
			$table->text('payload');
			$table->boolean('attempts');
			$table->integer('reserved_at')->nullable();
			$table->integer('available_at');
			$table->integer('created_at');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('laravel_jobs');
	}

}
