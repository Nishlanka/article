<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterJobtypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_jobtypes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 50);
			$table->integer('pav');
			$table->timestamps();
			$table->softDeletes();
			$table->dateTime('timestamp')->nullable();
			$table->integer('delete_status');
			$table->string('code', 40)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_jobtypes');
	}

}
