<?php 

$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/login','AuthController@login')->middleware('check_login');
    $router->post('/login','AuthController@postLogin')->name('login');
    $router->get('/logout','AuthController@logout')->name('logout');
});

$router->get('/register','UserController@getRegister');
$router->post('/register','UserController@register')->name('register');
$router->get('/login','UserController@getLogin')->name('get_login_web')->middleware('check_login_web');
$router->post('/login','UserController@login')->name('login_web');
$router->get('/logout','UserController@logout')->name('logout_web');