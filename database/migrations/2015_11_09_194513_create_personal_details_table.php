<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personal_details', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('surname');
			$table->date('dob');
            $table->string('place_of_birth');
            $table->string('gender');
            $table->integer('ms_id');
            $table->string('phone');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->string('lga');
            $table->text('home_town');
            $table->string('email',255);
            $table->text('contact_address');
            $table->integer('contact_country_id');
            $table->integer('contact_state_id');
            $table->string('contact_lga');
            $table->text('town_city');
            $table->text('passport_photo_path');
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
		Schema::drop('personal_details');
	}

}
