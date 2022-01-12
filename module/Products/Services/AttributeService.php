<?php

namespace Module\Products\Services;

use Module\Products\Repositories\AttributeRepository;

class AttributeService
{
    protected $attributeRepository;

    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function create($attributes)
    {
        $this->attributeRepository->create($attributes);
    }

    public function getAll()
    {
        $data = $this->attributeRepository->getModel()->paginate(5);
        return $data;
    }

    public function showEdit($id)
    {
        $data = $this->attributeRepository->getById($id);
        return $data;
    }

    public function edit($attributes, $id)
    {
        $item = $this->attributeRepository->getById($id);
        $data = $item->update($attributes);
        return $data;
    }

    public function destroy($id)
    {
        $item = $this->attributeRepository->getById($id)->delete();
        return $item;
    }
}
