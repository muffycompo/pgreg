<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgrammesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('programmes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('programme_type');
			$table->string('programme_of_study');
			$table->string('mode_of_study');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('programmes');
	}

}
