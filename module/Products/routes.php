<?php
$router->group(['prefix'=>'/admin/products'],function() use($router){
    $router->get('/','ProductController@getAll')->name('get_product');
    $router->get('/create','ProductController@getCreate')->name('get_create_product');
    $router->post('/create','ProductController@create')->name('create_product');
    $router->get('/edit/{id}','ProductController@getEdit')->name('get_edit_product');
    $router->post('/edit/{id}','ProductController@edit')->name('edit_product');
    $router->get('/delete/{id}','ProductController@delete')->name('delete_product');

    $router->get('/categories/create','CategoryController@getCreate')->name('get_create_category');
    $router->post('/categories/create','CategoryController@create')->name('create_category');
    $router->get('/categories','CategoryController@getAll')->name('get_all_category');
    $router->get('/categories/edit/{id}','CategoryController@showEdit')->name('get_edit_category');
    $router->post('/categories/edit/{id}','CategoryController@edit')->name('edit_category');
    $router->get('/categories/delete/{id}','CategoryController@delete')->name('delete_category');

    $router->get('/attributes/create','AttributeController@getCreate')->name('get_create_attribute');
    $router->post('/attributes/create','AttributeController@create')->name('create_attribute');
    $router->get('/attributes','AttributeController@getAll')->name('get_all_attribute');
    $router->get('/attributes/edit/{id}','AttributeController@showEdit')->name('get_edit_attribute');
    $router->post('/attributes/edit/{id}','AttributeController@edit')->name('edit_attribute');
    $router->get('/attributes/delete/{id}','AttributeController@delete')->name('delete_attribute');
});
