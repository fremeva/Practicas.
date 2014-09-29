<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanningsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plannings', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->longText('required_activities');
                        $table->string('responsible');
                        $table->string('term');
                        $table->longText('resources')->nullable();
                        $table->longText('monitoring')->nullable();
                        $table->string('plan_status');
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
		Schema::drop('plannings');
	}

}
