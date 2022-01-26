<?php

namespace Module\Clients\Services;

use Illuminate\Support\Str;
use Module\Products\Repositories\CategoryRepository;

class CategorySevice
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getById($id)
    {
        $category_parent = $this->categoryRepository->getById($id);
        $category_child = $this->categoryRepository->getModel()->where('parent_id', $id)->get();
        return [$category_parent, $category_child];
    }
}