<?php

    namespace Module\Blogs\Controllers;

    use Illuminate\Http\Request;
    use Module\Blogs\Services\BlogService;
    use Infrastructure\Http\Controller;
    use Illuminate\Support\Facades\Auth;

    class BlogController extends Controller
    {
        protected $blogService;

        public function __construct(BlogService $blogService)
        {
            $this->blogService = $blogService;
        }

        public function getCreate()
        {
            return view('admin.blogs.createBlog');
        }

        public function create(Request $request)
        {
            $blog = $request->blog;
            $blog['user_id'] = Auth::user()->id;
            $this->blogService->create($blog);
            return redirect()->route('get_list_blog');
        }

        public function getAll()
        {
            $results = $this->blogService->getAll();
            return view('admin.blogs.listBlog', compact('results'));

        }

        public function showEdit($id)
        {
            $results = $this->blogService->showEdit($id);
            return view('admin.blogs.editBlog', compact('results'));

        }

        public function edit(Request $request, $id)
        {
            $blog = $request->blog;
            $blog['user_id'] = Auth::user()->id;
            $this->blogService->edit($blog, $id);
            return redirect()->route('get_list_blog');
        }

        public function delete($id)
        {
            $this->blogService->destroy($id);
            return redirect()->route('get_list_blog');
        }

    }
