<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterVersionUpdateTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_version_update', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->decimal('version', 12);
			$table->string('url', 1000);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_version_update');
	}

}
