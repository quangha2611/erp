<?php

namespace Modules\Assets\Repositories\AssetsCategory;

use App\Company;
use App\User;

use Modules\Assets\Repositories\BaseRepository;
use Modules\Assets\Repositories\BaseInterfaceRepository;
use Modules\Assets\Entities\AssetCategory;
use Modules\Assets\Repositories\AssetsCategory\AssetsCategoryInterfaceRepository;

class AssetsCategoryRepository extends BaseRepository implements AssetsCategoryInterfaceRepository
{

    public function getModel()
    {
        return new AssetCategory();
    }

    public function index()
    {
        $categories = $this->model->all();
        $companies = Company::all();

        // get name of company by id
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;

            $category->author = User::findOrFail($category->author)->name;
        }

        return $categories;
    }

    public function paginate($pages)
    {
        $categories = $this->model->paginate($pages);
        $companies = Company::all();

        // get name of company by id
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;

            $category->author = User::findOrFail($category->author)->name;
        }

        return $categories;
    }

    public function filter(array $attributes)
    {
        $categories= $this->model->where('companyId',$attributes['companyId'])->paginate(2);

        $companies = Company::all();

        // get name of company by id
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;
        }

        return $categories;
    }

    public function destroy($id)
    {
        $categories = $this->model->all();

        foreach($categories as $category) {
            if($category->parentId == $id) {
                $category->parentId = null;
                $category->save();
            }
        }

        $this->model->find($id)->delete();
    }
    
}

?>
