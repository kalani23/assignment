<?php

namespace App\Http\Classes;

use App\Parents;

use DB;



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 class ParentClass {

    public $objParent;

            
    public function create($parentName,$parentGender,$studentId,$parentDob) {
        
         $this->objParent  = New Parents;
         $this->objParent->name = $parentName;
         $this->objParent->dob  = $parentDob;
         $this->objParent->type = $parentGender;
        
         $created = $this->objParent->save();
                    
        if(!$created){
             return response()->json(['success' => false, 'msg' => 'error occured in course creation']);  
        } else {
             DB::table('student_parent')->insert(['student_id' => $studentId, 'parent_id' => $this->objParent->id]);
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
