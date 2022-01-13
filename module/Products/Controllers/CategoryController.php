<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Services\CategoryService;
use Infrastructure\Http\Controller;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function getCreate()
    {
        $results = $this->categoryService->getAll();
        return view('admin.products.create_category', compact('results'));
    }

    public function create(Request $request)
    {
        $categories = $request->categories;
        $this->categoryService->create($categories);
        return redirect()->route('get_all_category');
    }

    public function getAll()
    {
        $results = $this->categoryService->getAll();
        return view('admin.products.list_category', compact('results'));
    }

    public function showEdit($id)
    {
        $results = $this->categoryService->showEdit($id);
        $all = $this->categoryService->getAll();
        return view('admin.products.edit_category', compact('results', 'all'));

    }

    public function edit(Request $request, $id)
    {
        $categories = $request->categories;
        $this->categoryService->edit($categories, $id);
        return redirect()->route('get_all_category');
    }

    public function delete($id)
    {
        $this->categoryService->destroy($id);
        return redirect()->route('get_all_category');
    }



}
