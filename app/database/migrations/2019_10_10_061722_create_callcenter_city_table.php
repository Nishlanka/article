<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_city', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('district_id')->index('fk_cities_districts1_idx');
			$table->string('name', 45);
			$table->decimal('latitude', 11, 8)->nullable();
			$table->decimal('longitude', 11, 8)->nullable();
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
		Schema::drop('callcenter_city');
	}

}
