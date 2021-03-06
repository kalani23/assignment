<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	
   protected $table = 'courses';
    /**
     * The students that belong to the course.
     */
   
    public function students()
    {
        return $this->hasMany('App\Student');
    }
}
