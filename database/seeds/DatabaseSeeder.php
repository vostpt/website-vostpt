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

        $limit = 33;

        //seed members
        for ($i = 0; $i < $limit; $i++) {
            DB::table('members')->insert([
                'name' => $faker->name,
                'role' => $faker->jobTitle,
                'bio' => $faker->paragraph,
                'avatar' => 'https://loremflickr.com/320/240/people?lock='.$i
            ]);
        }
    }
}
