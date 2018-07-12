<?php
namespace App\Http\Traits;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



use App\Students;

trait StudentTrait {

    public function get_all_students() {

        $objStudents = new Students;
        $students = $objStudents::with(['course'])->orderBy('updated_at', 'DESC')->get()->toArray();
        return $students;
    }

}
