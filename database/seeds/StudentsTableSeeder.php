<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            'name'      => str_random(10),
            'course_id' => 1,
            'dob'       => 2018-07-12,
			'city'      => str_random(10),
        ]);
    }
}
