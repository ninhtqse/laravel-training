<?php 
$router->group(['prefix'=>'/admin/users'],function() use($router){
    $router->get('/','UserController@getAll')->name('admin');
    $router->get('/dashboard','UserController@getDashboard')->name('dashboard');//module riêng (/admin)
    $router->post('/create','UserController@createUser')->name('create_user');
    $router->get('/create','UserController@create')->name('get_create');
    $router->get('/edit/{id}', 'UserController@showEdit')->name('get_edit');
    $router->post('/edit/{id}', 'UserController@edit')->name('edit');
    $router->get('/delete/{id}', 'UserController@delete')->name('delete_user');
    $router->get('/lock/{id}/{active}', 'UserController@lockUser')->name('lock_user');
});