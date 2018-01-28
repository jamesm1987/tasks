<?php

use Illuminate\Database\Seeder;

use App\Project;
use App\User;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$project_owner = User::where('name', 'Owner Name')->first();
    	$project = new Project();
    	$project->name = 'New Project';
    	$project->owner = $project_owner->id;
    	$project->save();
    }
}