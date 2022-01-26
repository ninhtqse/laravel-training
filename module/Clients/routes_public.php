<?php 

$router->get('/', 'HomeController@index');
$router->get('/blog','BlogController@index');
$router->get('/product','ProductController@index')->name('product_web');
$router->get('/privacy','HomeController@privacy');
$router->get('/about','HomeController@about');
$router->get('/forgot_password','AuthController@forgotPassword');
$router->get('/shopping_cart','HomeController@shoppingCart');
$router->get('/checkout','HomeController@checkout');
$router->get('/reset_password','AuthController@getResetPass');
$router->post('/reset_password','AuthController@doForgotPassword')->name('do_forgot_password');
$router->post('/forgot_password','AuthController@sendMailForgotPassword')->name('send_mail_forgot_password');