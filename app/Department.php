<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

	protected $fillable=[
		'dep_name'
	];


    public function doctors(){
    	//return $this->hasMany('/App/Doctor');
    	return $this->hasMany(Doctor::class,'department_id','doc_id');
    }
}
