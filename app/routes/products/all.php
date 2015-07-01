<?php

$app->get('/products', function() use ($app) {

	//$products = $app->products->where('id', 1)->get();
	$products = $app->products->categories()->get();

	$response = $app->response();
	$response['Content-Type'] = 'application/json';
	$response->status(200);

	$response->body(json_encode($products));

});