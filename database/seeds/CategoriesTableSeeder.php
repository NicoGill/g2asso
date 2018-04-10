<?php

use Illuminate\Database\Seeder;
use App\Categorie;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('categories')->delete();

		// categorie_seeder
		Categorie::create(array(
				'name' => 'Jardinage',
				'slug' => 'jardinage',
				'description' => 'Eminuit autem inter humilia supergressa iam impotentia fines.'
			));

			Categorie::create(array(
					'name' => 'Accompagnement',
					'slug' => 'accompagnement',
					'description' => 'Test impotentia fines.'
				));
	}
}
