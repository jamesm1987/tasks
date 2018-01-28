<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_owner = new Role();
	    $role_owner->name = 'owner';
	    $role_owner->description = 'A Project owner';
	    $role_owner->save();
	    $role_admin = new Role();
	    $role_admin->name = 'admin';
	    $role_admin->description = 'An admin user';
	    $role_admin->save();
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'A standard user';
        $role_user->save();
    }
}
