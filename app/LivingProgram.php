<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LivingProgram extends Model
{
    protected $fillable=[
		'title',
		'description',
		'image',
	];
}
