<?php
    $router->group(['prefix'=>'/admin'],function() use($router){
        $router->post('/login','AuthController@postLogin')->name('login');
        $router->get('/login','AuthController@login')->middleware('check_login')->name('admin');
    });
