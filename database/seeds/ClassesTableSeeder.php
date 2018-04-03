<?php

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                'name' => 'CS 3',
                'size' => 180
            ],
            [
                'name' => 'CS 4',
                'size' => 200
            ]
        ]);

        DB::table('courses_classes')->insert([
            [
                'course_id' => 1,
                'class_id' => 1,
                'meetings' => 2
            ],
            [
                'course_id' => 2,
                'class_id' => 1,
                'meetings' => 2
            ],
            [
                'course_id' => 3,
                'class_id' => 1,
                'meetings' => 3
            ],
            [
                'course_id' => 4,
                'class_id' => 1,
                'meetings' => 2
            ],
            [
                'course_id' => 5,
                'class_id' => 2,
                'meetings' => 2
            ],
            [
                'course_id' => 6,
                'class_id' => 2,
                'meetings' => 2
            ],
            [
                'course_id' => 7,
                'class_id' => 2,
                'meetings' => 2
            ],
            [
                'course_id' => 8,
                'class_id' => 2,
                'meetings' => 2
            ]
        ]);
    }
}