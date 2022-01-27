<?php

$router->get('/api/v1/products','ProductController@getAll');
$router->get('/api/v1/product_details','ProductDetailController@getAll');