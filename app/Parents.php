<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
     /**
     * Get the student 
     */
    public function student()
    {
        return $this->belongsTo('App\Student');
    }
}
