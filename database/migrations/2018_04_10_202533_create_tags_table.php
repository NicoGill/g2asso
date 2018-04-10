<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagsTable extends Migration {

	public function up()
	{
		Schema::create('tags', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('slug', 190)->unique();
		});
	}

	public function down()
	{
		Schema::drop('tags');
	}
}
