<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        DB::table('tags')->truncate();

        $tags = Tag::lists('id');

		foreach(range(1, 10) as $index)
		{
			Post::create([
                'title' =>  $faker->sentence(4),
                'content'   =>  $faker->paragraph(2),
                'published' =>  $faker->boolean,
                'created_at'    =>  $faker->dateTime
			]);
		}
	}

}
