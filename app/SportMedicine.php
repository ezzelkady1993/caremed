<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SportMedicine extends Model
{
    protected $fillable=[
		'title',
		'description',
		'image',
	];
}
