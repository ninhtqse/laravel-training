<?php 

$router->get('/', 'HomeController@index');
$router->get('/blog','BlogController@index');
$router->get('/product','ProductController@index')->name('product_web');
$router->get('/privacy','HomeController@privacy');
$router->get('/about','HomeController@about');
$router->get('/forgot_password','HomeController@forgotPassword');
$router->get('/shopping_cart','HomeController@shoppingCart');
$router->get('/checkout','HomeController@checkout');