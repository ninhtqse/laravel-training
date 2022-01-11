<?php

$router->get('/', 'HomeController@index');
$router->get('/blogs','BlogController@index');
$router->get('/products','ProductController@index');
$router->get('/privacy','HomeController@privacy');
$router->get('/about','HomeController@about');
