<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('tags')->delete();

		// tag_seeder
		Tag::create(array(
				'name' => 'accueil',
				'slug' => 'mission'
			));
	}
}
