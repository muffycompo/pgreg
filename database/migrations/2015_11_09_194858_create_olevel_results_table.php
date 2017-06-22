<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOlevelResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('olevel_results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
            $table->string('ssce_status');
            $table->integer('number_of_sitting');
            $table->string('organization',255);
            $table->integer('exam_type_id');
            $table->integer('exam_year')->nullable();
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
		Schema::drop('olevel_results');
	}

}
