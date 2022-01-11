<?php 
$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/createCategory','CategoryController@getCreate')->name('get_create_category');
    $router->post('/createCategory','CategoryController@create')->name('create_category');
    $router->get('/getAllCategory','CategoryController@getAll')->name('get_all_category');
    $router->get('/editCategory/{id}','CategoryController@showEdit')->name('get_edit_category');
    $router->post('/editCategory/{id}','CategoryController@edit')->name('edit_category');
    $router->get('/deleteCategory/{id}','CategoryController@delete')->name('delete_category');
});