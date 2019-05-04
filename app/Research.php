<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    protected $fillable=[
		'title',
		'author',
		'description',
		'image',
	];
}
