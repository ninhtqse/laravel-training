<?php
    $router->group(['prefix' => '/admin'], function() use($router){
        $router->get('/dashboard','UserController@getDashBoard')->name('admin');
        $router->get('/users','UserController@getAll')->name('getAllUsers');
        $router->post('/users/create','UserController@createUser')->name('create_user');
        $router->get('/users/create','UserController@create')->name('get_create');
        $router->get('/users/edit/{id}', 'UserController@showEdit')->name('get_edit');
        $router->post('/users/edit/{id}', 'UserController@edit')->name('edit');
        $router->get('/users/delete/{id}', 'UserController@delete')->name('delete_user');
        $router->get('/users/lockUser/{id}/{active}', 'UserController@lockUser')->name('lock_user');
    });
