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

	public function products()
	{
		return $this->hasMany('Supermatehuala\Products\Products', 'primary_category');
	}

}