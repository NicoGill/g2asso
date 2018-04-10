<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnnoncesTable extends Migration {

	public function up()
	{
		Schema::create('annonces', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();;
			$table->integer('categorie_id')->unsigned()->index();
			$table->string('title', 255);
			$table->string('slug', 190)->unique();
			$table->string('description', 255)->nullable();
			$table->text('content');
			$table->enum('status', array('draft', 'publish'))->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('annonces');
	}
}
