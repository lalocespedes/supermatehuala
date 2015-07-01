<?php

$app->get('/admin/products', function() use($app) {

	echo "Listar todos los productos";

});

$app->post('/admin/products', function() use($app) {

	echo "Registrar productos";

});