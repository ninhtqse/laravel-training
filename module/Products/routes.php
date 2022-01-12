<?php
$router->group(['prefix'=>'/admin/product'],function() use($router){
    $router->get('/create','ProductController@getCreate')->name('get_create_product');
    $router->post('/create','ProductController@create')->name('create_product');
    $router->get('/','ProductController@getAll')->name('get_product');
    $router->get('/edit/{id}','ProductController@getEdit')->name('get_edit_product');

    $router->get('/createCategory','CategoryController@getCreate')->name('get_create_category');
    $router->post('/createCategory','CategoryController@create')->name('create_category');
    $router->get('/getAllCategory','CategoryController@getAll')->name('get_all_category');
    $router->get('/editCategory/{id}','CategoryController@showEdit')->name('get_edit_category');
    $router->post('/editCategory/{id}','CategoryController@edit')->name('edit_category');
    $router->get('/deleteCategory/{id}','CategoryController@delete')->name('delete_category');

    $router->get('/attribute/create','AttributeController@getCreate')->name('get_create_attribute');
    $router->post('/attribute/create','AttributeController@create')->name('create_attribute');
    $router->get('/attribute','AttributeController@getAll')->name('get_all_attribute');
    $router->get('/attribute/edit/{id}','AttributeController@showEdit')->name('get_edit_attribute');
    $router->post('/attribute/edit/{id}','AttributeController@edit')->name('edit_attribute');
    $router->get('/attribute/delete/{id}','AttributeController@delete')->name('delete_attribute');
});
