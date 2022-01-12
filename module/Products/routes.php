<?php 
$router->group(['prefix'=>'/admin/product'],function() use($router){
    $router->get('/create','ProductController@getCreate')->name('get_create_product');
    $router->post('/create','ProductController@create')->name('create_product');
    $router->get('/','ProductController@getAll')->name('get_product');
});