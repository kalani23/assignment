<?php
namespace App\Http\Traits;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



use App\Course;

trait CourseTrait {

    public function get_all_courses() {

        $objCourse = new Course;
        $courses = $objCourse->orderBy('updated_at', 'DESC')->get()->toArray();
        return $courses;
    }

}
