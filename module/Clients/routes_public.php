<?php 

$router->get('/', 'HomeController@index')->name('home_client');
$router->get('/blog','BlogController@index');
$router->get('/products/{id?}','ProductController@index')->name('product_web');
$router->get('/privacy','HomeController@privacy');
$router->get('/about','HomeController@about');
$router->get('/product_detail/{id}','ProductController@getProductDetail');
$router->get('/forgot_password','AuthController@forgotPassword');
$router->get('/shopping_cart','HomeController@shoppingCart');
$router->get('/checkout','HomeController@checkout');
$router->get('/orders','OrderController@getAll');
$router->post('/orders','OrderController@updateProduct')->name('update_product_cart');
$router->post('/add-cart','OrderController@addCart')->name('add-cart');
$router->get('/reset_password','AuthController@getResetPass');
$router->post('/reset_password','AuthController@doForgotPassword')->name('do_forgot_password');
$router->post('/forgot_password','AuthController@sendMailForgotPassword')->name('send_mail_forgot_password');
