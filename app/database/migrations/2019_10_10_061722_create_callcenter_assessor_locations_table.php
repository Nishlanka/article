<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterAssessorLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_assessor_locations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('assessor_id');
			$table->float('lat', 18, 11);
			$table->float('lng', 18, 11);
			$table->string('battery_level', 25);
			$table->string('type', 25);
			$table->string('location_type', 25);
			$table->dateTime('date');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_assessor_locations');
	}

}
