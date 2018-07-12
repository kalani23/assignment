<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;



class Students extends Model
{
	
	protected $table = 'students';
	  
	  /**
     * The course that belong to the student.
     */
	 
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
	
	  /**
     * Get the parents for the student
     */
	 
    public function parents()
    {
        return $this->hasMany('App\Parent');
    }
    

}
