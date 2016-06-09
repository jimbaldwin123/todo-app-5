<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class ProjectsTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$faker = Faker::create();
		foreach (range(1,10) as $index) {
			$name = $faker->realText($maxNbChars = 20, $indexSize = 2);
	        $project = App\Project::create([
	            'name' => $name,
	            'slug' => str_slug($name, '-'),
	        ]);

	        foreach(range(1,5) as $index2) {
		        $task_name = $faker->realText($maxNbChars = 20, $indexSize = 2);
		      	$task = App\Task::create([
		      		'project_id' => $project->id,
		            'name' => $task_name,
		            'slug' => str_slug($task_name, '-'),
		            'completed' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
	        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
		        ]);
	      	}
	    }
    }
}


