<?php 
$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/login','AuthController@login')->middleware('login:web');
    $router->post('/login','AuthController@postLogin')->name('login');
    $router->get('/dashboard','UserController@getAll')->middleware('auth:web')->name('admin');
    $router->post('/users','UserController@createUser');
    $router->get('/create','UserController@create');
    $router->get('/logout','AuthController@logout')->name('logout');
});