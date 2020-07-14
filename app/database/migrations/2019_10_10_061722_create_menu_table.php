<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('label');
			$table->string('link');
			$table->string('icon')->nullable();
			$table->integer('parent')->nullable();
			$table->text('permissions', 65535)->nullable();
			$table->integer('lft');
			$table->integer('rgt')->nullable();
			$table->integer('depth');
			$table->boolean('status')->nullable()->default(1);
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
		Schema::drop('menu');
	}

}
