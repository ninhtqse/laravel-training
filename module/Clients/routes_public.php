<?php 

$router->get('/', 'HomeController@index');
$router->get('/blog','BlogController@index');
$router->get('/product','ProductController@index');
$router->get('/privacy','HomeController@privacy');
$router->get('/about','HomeController@about');