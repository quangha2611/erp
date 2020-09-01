<?php

namespace Modules\Accounting\Repositories\Category;

use Modules\Accounting\Repositories\BaseRepository;
use Modules\Accounting\Repositories\Category\CategoryInterfaceRepository;

use Modules\Accounting\Entities\AccountCategory;

class CategoryRepository extends BaseRepository implements CategoryInterfaceRepository
{
    public function getModel()
    {
        return new AccountCategory();
    }

    public function index()
    {
        $categories = $this->model->where('isDeleted',false)->get();

        foreach($categories as $category) {
            $category->companyId = $category->company->name;
            $category->author    = $category->user->name;
        }

        return $categories;
    }

    public function destroy($id)
    {
        $category = $this->model->find($id);
        $category->isDeleted = true;
        $category->save();
    }

    public function filter(array $request)
    {
        $categories = $this->model->query();
        $categories->where('companyId',$request['companyId']);
        $categories->where('isDeleted',false);
        $data = $categories->get();
        foreach($data as $category) {
            $category->companyId = $category->company->name;
            $category->author    = $category->user->name;
        }
        return $data;
    }
    
}

?>
