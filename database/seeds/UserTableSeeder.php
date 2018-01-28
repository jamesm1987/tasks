<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
	    $role_user  = Role::where('name', 'user')->first();
	    $admin = new User();
	    $admin->name = 'Admin Name';
	    $admin->email = 'admin@admin.com';
	    $admin->password = bcrypt('secret');
	    $admin->save();
	    $admin->roles()->attach($role_admin);
	    $user = new User();
	    $user->name = 'User Name';
	    $user->email = 'user@user.com';
	    $user->password = bcrypt('secret');
	    $user->save();
	    $user->roles()->attach($role_user);
    }
}
