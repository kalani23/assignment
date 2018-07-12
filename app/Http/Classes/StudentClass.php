<?php

namespace App\Http\Classes;

use App\Students;


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 class StudentClass {

    public $objStudent;
   
    public function create($studentName,$course,$dob,$city) {
        
        $this->objStudent = New Students;
        $this->objStudent->name       = $studentName;
        $this->objStudent->course_id  = $course;
        $this->objStudent->dob        = $dob;
        $this->objStudent->city       = $city;
        
        $created =  $this->objStudent->save();
        
        if(!$created){
           return response()->json(['success' => false, 'msg' => 'error occured in student creation']);  
        } else {
           return response()->json(['success' => true, 'msg' => 'You have succesfully created a new student']);  
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
