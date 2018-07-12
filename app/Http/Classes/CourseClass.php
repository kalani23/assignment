<?php

namespace App\Http\Classes;
use App\Course;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 class CourseClass {

    public $objCourse;
   
    public function create($courseName,$year) {
        
        $this->objCourse = New Course;
        $this->objCourse->name = $courseName;
        $this->objCourse->year = $year;
        $created =  $this->objCourse->save();
        
        if(!$created){
           return response()->json(['success' => false, 'msg' => 'error occured in course creation']);  
        } else {
           return response()->json(['success' => true, 'msg' => 'You have succesfully created a new course']);  
        }
    }

    public function delete($courseId) {
        $this->objCourse = New Course;
        $deleted = $this->objCourse->destroy($courseId);
        
         if(!$deleted){
           return response()->json(['success' => false, 'msg' => 'error occured in course deletion']);  
        } else {
           return response()->json(['success' => true, 'msg' => 'You have succesfully deleted the course']);  
        }
    }

    public function update($courseId) {
        
    }

}
