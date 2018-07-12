<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Traits\StudentTrait;

use App\Http\Traits\CourseTrait;

use App\Http\Classes\CourseClass;

use App\Http\Classes\StudentClass;

use App\Http\Classes\ParentClass;



class CRUDController extends Controller {

    use StudentTrait,CourseTrait;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {

        return view('adminDashboard');
    }

    public function create_student(StudentClass $student,Request $request) {
        return $student->create($request->student_name,$request->student_course,$request->student_dob,$request->student_city);  
    }

    public function edit_student() {
        
    }

    public function delete_student() {
        
    }

    public function view_students() {
        $students = $this->get_all_students();
         if(!empty($students)) {
             return response()->json(['success' => true, 'msg' => 'success','data'=>$students]);    
         } else {
             return response()->json(['success' => false, 'msg' => 'no data']);   
         }
    }

    protected function create_course(CourseClass $course,Request $request) {
        return $course->create($request->course_name,$request->course_year);  
    }

    public function edit_course() {
        
    }

    public function delete_course(CourseClass $course,Request $request) {
        return $course->delete($request->course_id);  
    }

    public function view_courses() {
         $courses = $this->get_all_courses();
         if(!empty($courses)) {
             return response()->json(['success' => true, 'msg' => 'success','data'=>$courses]);    
         } else {
             return response()->json(['success' => false, 'msg' => 'no data']);   
         }
    }

    public function create_parent(ParentClass $parent,Request $request) {
         return $parent->create($request->parent_name,$request->parent_gender,$request->student_name_for_parent,$request->parent_dob); 
    }

    public function edit_parent() {
        
    }

    public function delete_parent() {
        
    }

    public function view_parents() {
        
    }

}
