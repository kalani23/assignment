<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\Http\Traits\StudentTrait;

class HomeController extends Controller {

    use StudentTrait;

    public function __construct() {
        $this->middleware('auth');
    }

    
    public function index() {
        if (Auth::user()->role === 1) {
            return redirect('admin-dashboard');
        } else {
            $students = $this->get_all_students();
            return view('home')->with('students', $students);
        }
    }

    public function getOlderThanEighteen() { //returns students older than 18
        $eighteenPlus = array();
        $students = $this->get_all_students();

        foreach ($students as $key => $student) {

            $age = $this->getAge($student->dob);
            if ($age > 18) {
                array_push($eighteenPlus, $student);
            }
        }

        if (!empty($eighteenPlus)) {
            return response()->json(['eighteenPlus' => $eighteenPlus, 'success' => true]);
        } else {
            return response()->json(['eighteenPlus' => $eighteenPlus, 'success' => false]);
        }
    }

    
    public function getClassEight() { // returns students in class 8 in 2008
        $classEightStudents = array();
        $students = $this->get_all_students();

        foreach ($students as $keys => $student) {
            if ($student['course']->id == 8 && $student['course']->year == 2010) {
                array_push($classEightStudents, $student);
            }
        }

        if (!empty($classEightStudents)) {
            return response()->json(['classEight' => $classEightStudents, 'success' => true]);
        } else {
            return response()->json(['classEight' => $classEightStudents, 'success' => false]);
        }
    }

    
    public function getClassAndParent(Request $request) { // returns class and the parent for a given student id
        $student_id = $request->student_id;
    }

    
    
    public function getOlderThanSixteen() { // returns students older than 16 and having parents older than 50
    }

    
    public function getAge($dob) { // calculate age by DOB
        $arr = explode('-', $dob);
        $y = $arr[0];
        $m = $arr[1];
        $d = $arr[2];

        $years = Carbon::createFromDate($y, $m, $d)->diff(Carbon::now())->format('%y');
        return $years;
    }

}
