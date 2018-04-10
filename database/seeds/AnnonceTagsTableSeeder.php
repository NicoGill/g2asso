<?php

use Illuminate\Database\Seeder;
use App\AnnonceTag;

class AnnonceTagsTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('annonce_tag')->delete();

		// annonce_tag_seeder
		AnnonceTag::create(array(
				'tag_id' => '1',
				'annonce_id' => '1'
			));
	}
}
