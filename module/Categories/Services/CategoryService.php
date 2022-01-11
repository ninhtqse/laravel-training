<?php 

namespace Module\Categories\Services;

use Module\Categories\Repositories\CategoryRepository;
use Illuminate\Support\Facades\DB;
class CategoryService
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function create($categories)
    {
        $this->categoryRepository->create($categories);
    }

    public function getAll()
    {
        $data = $this->categoryRepository->getModel()->paginate(5);
        return $data;
    }

    public function showEdit($id)
    {
        $data = $this->categoryRepository->getModel()->where('id',$id)->first();
        return $data;
    }

    public function edit($categories, $id)
    {
        $item = $this->categoryRepository->getModel()->where('id',$id);
        $data = $item->update($categories);
        return $data;
    }

    public function destroy($id)
    {
        $item = $this->categoryRepository->getModel()->where('id',$id)->delete();
        return $item;
    }

}
