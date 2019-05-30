<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{


	protected $fillable=[ 
		'doc_name',
		'age',
		'description',
		'image',
		'department_id'
	];



    public function departments(){
    	return $this->belongsTo(Department::class,'doc_id','dep_id');
    }
}
