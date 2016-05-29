<?php

$app->get('/categories/', function() use ($app) {

	dd($app->categories->all());

	//$categories = $app->categories->all();

	// $response = $app->response();
	// $response['Content-Type'] = 'application/json';
	// $response->status(200);

	// $response->body(json_encode($products));

	// foreach ($categories as $key => $category) {
		
	// 	echo $category->name .' '. $category->products;

	// }
	
});