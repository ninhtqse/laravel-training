<?php 
$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/attribute/create','AttributeController@getCreate')->name('get_create_attribute');
    $router->post('/attribute/create','AttributeController@create')->name('create_attribute');
    $router->get('/attribute','AttributeController@getAll')->name('get_all_attribute');
    $router->get('/attribute/edit/{id}','AttributeController@showEdit')->name('get_edit_attribute');
    $router->post('/attribute/edit/{id}','AttributeController@edit')->name('edit_attribute');
    $router->get('/attribute/delete/{id}','AttributeController@delete')->name('delete_attribute');
});