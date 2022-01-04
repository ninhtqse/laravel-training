<?php 
$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/login','AuthController@login')->middleware('check_login');
    $router->post('/login','AuthController@postLogin')->name('login');
    $router->get('/logout','AuthController@logout')->name('logout');
});