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
			$table->increments('id')->unsigned();
			$table->string('year');
                        $table->string('month');
                        $table->string('norm');
                        $table->string('norm_number');
                        
                        $table->integer('aspect_id')
                                ->unsigned();
                        
                        $table->foreign('aspect_id')
                                ->references('id')->on('aspects')
                                ->onDelete('cascade');
                        
                        
                        $table->string('article');
                        $table->text('modifications');
			$table->text('repeals');
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
