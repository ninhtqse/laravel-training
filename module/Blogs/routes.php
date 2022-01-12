<?php
    $router->group(['prefix' => '/admin'], function () use ($router) {
        $router->get('/createBlog', 'BlogController@getCreate')->name('get_create_blog');
        $router->post('/createBlog', 'BlogController@create')->name('create_blog');
        $router->get('/listBlog', 'BlogController@getAll')->name('get_list_blog');
        $router->get('/editBlog/{id}', 'BlogController@showEdit')->name('get_edit_blog');
        $router->post('/editBlog/{id}', 'BlogController@edit')->name('edit_blog');
        $router->get('/deleteBlog/{id}', 'BlogController@delete')->name('delete_blog');
    });
