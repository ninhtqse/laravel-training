<?php 
$router->group(['prefix'=>'/admin/users'],function() use($router){
    $router->get('/','UserController@getAll')->name('admin');
    $router->get('/dashboard','UserController@getDashboard')->name('dashboard');
    $router->post('/create','UserController@createUser')->name('create_user');
    $router->get('/create','UserController@create')->name('get_create');
    $router->get('/edit/{id}', 'UserController@showEdit')->name('get_edit');
    $router->post('/edit/{id}', 'UserController@edit')->name('edit');
    $router->get('/delete/{id}', 'UserController@delete')->name('delete_user');
    $router->get('/lockUser/{id}/{active}', 'UserController@lockUser')->name('lock_user');
    $router->get('/list_order', 'OrderController@getAll')->name('get_order');
    $router->get('/order/{id}', 'OrderController@getById')->name('get_order_detail');
    $router->post('/order/{id}', 'OrderController@editStatus')->name('edit_status');
    
});