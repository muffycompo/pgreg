<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlevelExamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('olevel_exams', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('subject_id');
			$table->string('grade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('olevel_exams');
	}

}
