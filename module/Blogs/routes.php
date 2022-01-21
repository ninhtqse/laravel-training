<?php 
$router->group(['prefix'=>'/admin/blogs'],function() use($router){
    $router->get('/create','BlogController@getCreate')->name('get_create_blog');
    $router->post('/create','BlogController@create')->name('create_blog');
    $router->get('','BlogController@getAll')->name('get_list_blog');
    $router->get('/edit/{id}', 'BlogController@showEdit')->name('get_edit_blog');
    $router->post('/edit/{id}', 'BlogController@edit')->name('edit_blog');
    $router->get('/delete/{id}', 'BlogController@delete')->name('delete_blog');
});