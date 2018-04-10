<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnnonceTagTable extends Migration {

	public function up()
	{
		Schema::create('annonce_tag', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('tag_id')->unsigned()->index();
			$table->integer('annonce_id')->unsigned()->index();
		});
	}

	public function down()
	{
		Schema::drop('annonce_tag');
	}
}
