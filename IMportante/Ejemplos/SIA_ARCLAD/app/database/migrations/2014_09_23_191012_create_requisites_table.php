<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requisites', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('year');
                        $table->string('month');
                        $table->string('norm');
                        $table->string('norm_number');
                        $table->string('aspect_associate');
                        $table->string('article');
                        $table->text('modifications')->nullable();
			$table->text('repeals')->nullable();
                        $table->string('state');
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
		Schema::drop('requisites');
	}

}
