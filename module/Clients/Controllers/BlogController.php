<?php

    namespace Module\Clients\Controllers;

    use Infrastructure\Http\Controller;

    class BlogController extends Controller
    {
        public function index()
        {
            return view('client.blogs.blogs');
        }
    }
