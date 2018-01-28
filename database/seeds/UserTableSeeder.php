<?php

use Illuminate\Database\Seeder;

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
	    $owner = new User();
	    $owner->name = 'Owner Name';
	    $owner->email = 'owner@owner.com';
	    $owner->password = bcrypt('secret');
	    $owner->save();
	    $admin = new User();
	    $admin->name = 'Admin Name';
	    $admin->email = 'admin@admin.com';
	    $admin->password = bcrypt('secret');
	    $admin->save();
	    $user = new User();
	    $user->name = 'User Name';
	    $user->email = 'user@user.com';
	    $user->password = bcrypt('secret');
	    $user->save();
    }
}
