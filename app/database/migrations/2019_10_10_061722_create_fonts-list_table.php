<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFontsListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fonts-list', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('type', 30)->nullable();
			$table->string('icon', 30)->nullable();
			$table->string('unicode', 30)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fonts-list');
	}

}
