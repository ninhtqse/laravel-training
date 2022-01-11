<?php 
$router->group(['prefix'=>'/admin'],function() use($router){
    $router->get('/blog/create','BlogController@getCreate')->name('get_create_blog');
    $router->post('/blog/create','BlogController@create')->name('create_blog');
    $router->get('/blog','BlogController@getAll')->name('get_list_blog');
    $router->get('/blog/edit/{id}', 'BlogController@showEdit')->name('get_edit_blog');
    $router->post('/blog/edit/{id}', 'BlogController@edit')->name('edit_blog');
    $router->get('/blog/delete/{id}', 'BlogController@delete')->name('delete_blog');
});