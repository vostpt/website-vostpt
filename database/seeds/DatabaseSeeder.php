<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(1234);
        $limit = 33;

        //seed members
        for ($i = 0; $i < $limit; $i++) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'role' => $faker->jobTitle,
                'bio' => $faker->text(280),
                'avatar' => 'https://loremflickr.com/1920/1080/people?lock=' . $i
            ]);
        }

        //seed coverages
        for ($i = 0; $i < $limit; $i++) {
            DB::table('coverages')->insert([
                'title' => $faker->sentence,
                'url' => $faker->url,
                'socialUrl' => $faker->url,
                'socialHandle' => '@' . $faker->userName,
                'avatar' => 'https://loremflickr.com/1920/1080/logo?lock=' . $i
            ]);
        }

        //seed testimonials
        for ($i = 0; $i < $limit; $i++) {
            DB::table('testimonials')->insert([
                'socialUrl' => $faker->url,
                'socialHandle' => '@' . $faker->userName,
                'body' => $faker->text(280),
                'avatar' => 'https://loremflickr.com/1920/1080/people?lock=' . ($i + $limit)
            ]);
        }

        //seed posts
        for ($i = 0; $i < $limit; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'body' => implode(' ', $faker->paragraphs),
                'cover' => 'https://loremflickr.com/1920/1080/landscape?lock=' . $i,
                'created_at' => $faker->dateTime
            ]);
        }
    }
}
