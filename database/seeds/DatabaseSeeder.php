<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Role comes before User seeder here.
  		$this->call(RoleTableSeeder::class);
  		// User seeder will use the roles above created.
  		$this->call(UserTableSeeder::class);
      // Project seeder will use the users above created.
      $this->call(ProjectTableSeeder::class);
    }
}
