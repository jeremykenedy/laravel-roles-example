<?php

use App\User;
use Ultraware\Roles\Models\Role;
use Ultraware\Roles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $userRole 			= Role::where('name', '=', 'User')->first();
        $adminRole 			= Role::where('name', '=', 'Admin')->first();

		$permissions 		= Permission::all();

	    /**
	     * Add Users
	     *
	     */
        if (User::where('email', '=', 'jeremykenedy@gmail.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Jeremy',
	            'email' => 'jeremykenedy@gmail.com',
	            'password' => bcrypt('password'),
	        ]);

	        $newUser->attachRole($adminRole);
			foreach ($permissions as $permission) {
				$newUser->attachPermission($permission);
			}

        }

        if (User::where('email', '=', 'jeremy@jeremykenedy.com')->first() === null) {

	        $newUser = User::create([
	            'name' => 'Jeremy',
	            'email' => 'jeremy@jeremykenedy.com',
	            'password' => bcrypt('password'),
	        ]);

	        $newUser;
	        $newUser->attachRole($userRole);

        }

    }
}