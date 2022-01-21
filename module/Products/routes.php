<?php
 
$router->group(['prefix'=>'/admin/products'],function() use($router){
    $router->get('/create','ProductController@getCreate')->name('get_create_product');
    $router->post('/create','ProductController@create')->name('create_product');
    $router->get('/','ProductController@getAll')->name('get_product');
    $router->get('/edit/{id}','ProductController@getByIdProduct')->name('get_edit_product');
    $router->post('/edit/{id}','ProductController@edit')->name('edit_product');
});

$router->group(['prefix'=>'/admin/attributes'],function() use($router){
    $router->get('/create','AttributeController@getCreate')->name('get_create_attribute');
    $router->post('/create','AttributeController@create')->name('create_attribute');
    $router->get('','AttributeController@getAll')->name('get_all_attribute');
    $router->get('/edit/{id}','AttributeController@showEdit')->name('get_edit_attribute');
    $router->post('/edit/{id}','AttributeController@edit')->name('edit_attribute');
    $router->get('/delete/{id}','AttributeController@delete')->name('delete_attribute');
});

$router->group(['prefix'=>'/admin/categories'],function() use($router){
    $router->get('/create','CategoryController@getCreate')->name('get_create_category');
    $router->post('/create','CategoryController@create')->name('create_category');
    $router->get('/','CategoryController@getAll')->name('get_all_category');
    $router->get('/edit/{id}','CategoryController@showEdit')->name('get_edit_category');
    $router->post('/edit/{id}','CategoryController@edit')->name('edit_category');
    $router->get('/delete/{id}','CategoryController@delete')->name('delete_category');
});

$router->group(['prefix'=>'/admin/users'],function() use($router){
    $router->get('/list_order', 'OrderController@getAll')->name('get_order');
    $router->get('/order/{id}', 'OrderController@getById')->name('get_order_detail');
    $router->post('/order/{id}', 'OrderController@editStatus')->name('edit_status');
});