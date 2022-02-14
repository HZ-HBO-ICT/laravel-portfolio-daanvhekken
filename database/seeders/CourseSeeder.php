<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'quartile' => 1,
            'course_name' => 'Programme and Career Orientation',
            'assessment_type' => 'Assesment',
            'assessment_id' => 0,
            'ec' => 2.5,
            'is_sub_course' => false
        ]);
        DB::table('courses')->insert([
            'quartile' => 1,
            'course_name' => 'Computer Science Basics',
            'assessment_type' => 'Written Exam',
            'assessment_id' => 1,
            'ec' => 5,
            'is_sub_course' => true
        ]);
        DB::table('courses')->insert([
            'quartile' => 1,
            'course_name' => 'Programming Basics',
            'assessment_type' => 'Case Study Exam',
            'assessment_id' => 2,
            'ec' => 5,
            'is_sub_course' => true
        ]);
        DB::table('courses')->insert([
            'quartile' => 2,
            'course_name' => 'Object Oriented Programming',
            'assessment_type' => 'Case Study & Project',
            'assessment_id' => 3,
            'ec' => 10,
            'is_sub_course' => false
        ]);
        DB::table('courses')->insert([
            'quartile' => 3,
            'course_name' => 'Framework Project 1 ',
            'assessment_type' => 'C2 Portofolio Exams',
            'assessment_id' => 4,
            'ec' => 5,
            'is_sub_course' => false
        ]);
        DB::table('courses')->insert([
            'quartile' => 1,
            'course_name' => 'Framework Development 1 ',
            'assessment_type' => 'Case Study',
            'assessment_id' => 5,
            'ec' => 7.5,
            'is_sub_course' => true
        ]);
        DB::table('courses')->insert([
            'quartile' => 4,
            'course_name' => 'Framework Project 2',
            'assessment_type' => 'Portofolio Exam',
            'assessment_id' => 6,
            'ec' => 10,
            'is_sub_course' => false
        ]);
        DB::table('courses')->insert([
            'quartile' => 1234,
            'course_name' => 'Personal Development',
            'assessment_type' => 'Portfolio',
            'assessment_id' => 7,
            'ec' => 12.5,
            'is_sub_course' => false
        ]);
        DB::table('courses')->insert([
            'quartile' => 1234,
            'course_name' => 'IT personality',
            'assessment_type' => 'Portfolio',
            'assessment_id' => 8,
            'ec' => 2.5,
            'is_sub_course' => true
        ]);
    }
}
