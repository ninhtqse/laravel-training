<?php 
$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/users','UserController@getAll');
    $router->post('/users','UserController@createUser');
    $router->get('/create','UserController@create');
    $router->get('/login','AuthController@login');
    $router->post('/login','AuthController@postLogin');
});