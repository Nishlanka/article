<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterPoliceStationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_police_station', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('district_id')->nullable();
			$table->string('division', 45)->nullable();
			$table->string('name', 100)->nullable();
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
		Schema::drop('callcenter_police_station');
	}

}
