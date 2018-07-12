<?php
namespace App\Http\Traits;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



use App\Parents;

trait ParentntTrait {

    public function get_all_parents() {

        $objParents = new Parents;
        $students = $objParents::with(['student'])->orderBy('updated_at', 'DESC')->get()->toArray();
        return $students;
    }

}
