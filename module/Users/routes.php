<?php
    $router->group(['prefix'=>'/admin'],function() use($router){
        $router->get('/dashboard','UserController@getAll')->name('admin');
        $router->post('/users','UserController@createUser');
        $router->get('/create','UserController@create');
        $router->get('/logout','AuthController@logout')->name('logout');
    });
