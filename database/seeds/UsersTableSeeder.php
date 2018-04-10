<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin = User::create(['name' => 'Nicolas Gillium', 'email' => 'contact@nicolas-gillium.fr', 'password' => Hash::make('secret')]);
      $admin->assignRole('administrateur');

      $benevole = User::create(['name' => 'John le bénévole', 'email' => 'johnbene@gmail.com', 'password' => Hash::make('secret')]);
      $benevole->assignRole('benevole');

      $association = User::create(['name' => 'Jeanne association & co', 'email' => 'jeanneasso@gmail.com', 'password' => Hash::make('secret')]);
      $association->assignRole('association');

    }
}
