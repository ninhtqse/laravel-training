<?php

namespace Module\Products\Controllers;

use Illuminate\Http\Request;
use Module\Products\Services\AttributeService;
use Infrastructure\Http\Controller;

class AttributeController extends Controller
{
    protected $attributeService;

    public function __construct(AttributeService $attributeService)
    {
        $this->attributeService = $attributeService;
    }

    public function getCreate()
    {
        return view('admin.products.create_attribute');
    }

    public function create(Request $request)
    {
        $attributes = $request['attributes'];
        $this->attributeService->create($attributes);
        return redirect()->route('get_all_attribute');
    }

    public function getAll()
    {
        $results = $this->attributeService->getAll();
        return view('admin.products.list_attribute', compact('results'));
    }

    public function showEdit($id)
    {
        $results = $this->attributeService->showEdit($id);
        return view('admin.products.edit_attribute', compact('results'));

    }

    public function edit(Request $request, $id)
    {
        $attributes = $request['attributes'];
        $this->attributeService->edit($attributes, $id);
        return redirect()->route('get_all_attribute');
    }

    public function delete($id)
    {
        $this->attributeService->destroy($id);
        return redirect()->route('get_all_attribute');
    }


}
