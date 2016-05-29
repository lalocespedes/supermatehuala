<?php

$app->get('/:category', function($category) use ($app) {

	$category = $app->categories->where('name', $category)->get();

	dd($category->products);
	//echo "string";

});

$app->get('/products', function() use ($app) {

	//$products = $app->products->where('id', 1)->get();
	//$products = $app->products->all();

	dd($app->products->all());

	// $response = $app->response();
	// $response['Content-Type'] = 'application/json';
	// $response->status(200);

	// $response->body(json_encode($products));

	// foreach ($products as $key => $product) {
		
	// 	echo $product->name . ' ' . $product->categories->name;

	// }

});
