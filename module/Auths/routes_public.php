<?php
    $router->group(['prefix'=>'/admin'],function() use($router){
        $router->get('/login','AuthController@getLogin')->middleware('check_login')->name('admin');
        $router->post('/login','AuthController@postLogin')->name('login');
        $router->get('/logout','AuthController@logout')->name('logout');
    });
