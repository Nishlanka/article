<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallcenterClaimsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('callcenter_claims', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('district_id');
			$table->integer('city_id');
			$table->integer('cause_id');
			$table->integer('user_id');
			$table->dateTime('call_time')->nullable();
			$table->dateTime('accident_time')->nullable();
			$table->string('vehicle_number', 45)->nullable();
			$table->string('policy_number', 100)->nullable();
			$table->integer('vehicle_value')->nullable();
			$table->string('claim_number', 45)->nullable();
			$table->text('claim_comment', 65535)->nullable();
			$table->string('vehicle_year', 45)->nullable();
			$table->text('place_of_accident', 65535)->nullable();
			$table->text('description_of_damage', 65535)->nullable();
			$table->text('description_of_accident', 65535)->nullable();
			$table->string('informer_name')->nullable();
			$table->string('driver_name')->nullable();
			$table->string('licence_number', 50)->nullable();
			$table->string('driver_contact_number', 50)->nullable();
			$table->string('driver_nic_number', 50)->nullable();
			$table->string('purpose_of_use', 50)->nullable();
			$table->string('relationship_with_insurer', 100)->nullable();
			$table->text('description_thirdparty_damages', 65535)->nullable();
			$table->enum('is_thirdparty_claiming', array('YES','NO'))->nullable();
			$table->text('comments', 65535)->nullable();
			$table->enum('vip_status', array('NO','YES'))->nullable();
			$table->boolean('status')->nullable();
			$table->timestamps();
			$table->timestamp('timestamp')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->softDeletes();
			$table->integer('callcenter_user_id');
			$table->string('branch', 200);
			$table->string('informer_contact_number', 50)->nullable();
			$table->string('chassis_number', 50)->nullable();
			$table->integer('police_station')->nullable();
			$table->index(['id','district_id','city_id','cause_id','user_id','call_time','accident_time','vehicle_number','policy_number','claim_number','created_at','chassis_number','callcenter_user_id','branch'], 'search');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('callcenter_claims');
	}

}
