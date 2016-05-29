<?php

namespace Supermatehuala\Products;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
* 
*/
class Products extends Eloquent
{
	protected $table = 'sm_products';

	protected $fillable = [
		'sku',
		'name'
	];

	public function categories()
	{
		return $this->hasOne('Supermatehuala\Categories\Categories', 'id');
	}
}
