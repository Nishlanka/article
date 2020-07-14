<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterAssessorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_assessors', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code', 45)->nullable();
			$table->string('token', 500)->index('as_tokn');
			$table->string('name', 100)->nullable();
			$table->string('contact_number', 50)->nullable();
			$table->string('email', 45)->nullable();
			$table->string('username', 45);
			$table->string('password', 500);
			$table->boolean('type')->nullable();
			$table->integer('district_id')->nullable();
			$table->integer('city_id')->nullable();
			$table->boolean('signin_status')->default(0);
			$table->boolean('status')->default(1);
			$table->integer('assessor_availability_status');
			$table->string('gcm_registration_id');
			$table->timestamps();
			$table->softDeletes();
			$table->timestamp('timestamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->index(['id','code','token','email','username','district_id','city_id','assessor_availability_status','timestamp'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_assessors');
	}

}
