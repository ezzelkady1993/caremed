<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HBook extends Model
{
    protected $fillable=[
		'name',
		'author',
		'description',
		'book',
		'image',
	];
}
