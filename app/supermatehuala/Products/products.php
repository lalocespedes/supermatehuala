<?php

namespace Supermatehuala\Products;
use Supermatehuala\Categories;

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
		$this->Hasmany('Supermatehuala\Categories\categories');

	}
}