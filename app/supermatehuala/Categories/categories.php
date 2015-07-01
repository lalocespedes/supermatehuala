<?php

namespace Supermatehuala\Categories;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class Categories extends Eloquent
{
	protected $table = 'sm_categories';

	protected $fillable = [
		'name',
		'description'
	];

}