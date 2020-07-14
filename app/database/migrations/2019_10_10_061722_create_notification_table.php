<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNotificationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id');
			$table->text('message', 65535);
			$table->text('url', 65535);
			$table->boolean('is_read');
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
		Schema::drop('notification');
	}

}
