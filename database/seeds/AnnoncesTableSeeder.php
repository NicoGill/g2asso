<?php

use Illuminate\Database\Seeder;
use App\Annonce;

class AnnoncesTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('annonces')->delete();

		// categorie_seeder
		Annonce::create(array(
				'user_id' => 1,
				'categorie_id' => 1,
				'title' => 'Annonce 1',
				'slug' => 'annonce-1',
				'description' => 'Excogitatum est super his, ut homines quidam ignoti, vilitate ipsa parum cavendi ad colligendos rumores per Antiochiae latera cuncta destinarentur relaturi quae audirent.',
				'content' => 'Eminuit autem inter humilia supergressa iam impotentia fines mediocrium delictorum nefanda Clematii cuiusdam Alexandrini nobilis mors repentina; cuius socrus cum misceri sibi generum, flagrans eius amore, non impetraret, ut ferebatur, per palatii pseudothyrum introducta, oblato pretioso reginae monili id adsecuta est, ut ad Honoratum tum comitem orientis formula missa letali omnino scelere nullo contactus idem Clematius nec hiscere nec loqui permissus occideretur.',
				'status' => 'publish',
				'comments' => 1
			));
	}
}
