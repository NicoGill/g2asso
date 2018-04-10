<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	public function run()
	{
		Model::unguard();

		$this->call('RolesAndPermissionsSeeder');
		$this->command->info('RolesAndPermissions table seeded!');

		$this->call('UsersTableSeeder');
		$this->command->info('RolesAndPermissions table seeded!');

		$this->call('CategoriesTableSeeder');
		$this->command->info('Categorie table seeded!');

		$this->call('AnnoncesTableSeeder');
		$this->command->info('Annonce table seeded!');

		$this->call('AnnonceTagsTableSeeder');
		$this->command->info('AnnonceTag table seeded!');

		$this->call('TagsTableSeeder');
		$this->command->info('Tag table seeded!');
	}
}
