<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evaluations', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->string('application');
                        $table->longText('specific_application');
                        $table->string('compliance');
                        $table->string('deadline')->nullable();
                        $table->longText('information_compliance')->nullable();
                        
                        $table->integer('requisite_id')
                                ->unsigned();
                        
                        $table->foreign('requisite_id')
                                ->references('id')->on('requisites')
                                ->onDelete('cascade');
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
		Schema::drop('evaluations');
	}

}
