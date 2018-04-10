<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentairesTable extends Migration {

	public function up()
	{
		Schema::create('commentaires', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('annonce_id')->unsigned()->index();
			$table->enum('status', array('pending', 'publish', 'spam'));
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('commentaires');
	}
}
