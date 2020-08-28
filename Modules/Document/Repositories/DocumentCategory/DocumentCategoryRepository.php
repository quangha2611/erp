<?php

namespace Modules\Document\Repositories\DocumentCategory;

use Modules\Document\Repositories\BaseRepository;
use Modules\Document\Repositories\DocumentCategory\DocumentCategoryInterfaceRepository;
use Modules\Document\Entities\DocumentCategory;
use App\Company;

class DocumentCategoryRepository extends BaseRepository implements DocumentCategoryInterfaceRepository
{
    public function getModel()
    {
        return new DocumentCategory();
    }

    public function index()
    {
        $categories = $this->model->where('isDeleted',false)->orderBy('id', 'desc')->get();
        
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;
        }

        return $categories;
    }

    public function paginate($pages)
    {
        $categories = $this->model->where('isDeleted',false)->orderBy('id', 'desc')->paginate($pages);
        
        foreach($categories as $category) {
            $category->companyId = Company::findOrFail($category->companyId)->name;
        }

        return $categories;
    }


    public function filter(array $attributes)
    {
        $categories =$this->model->query();
        
        if(isset($attributes['id']) && $attributes['id'] != null) {
            $categories->where('id',$attributes['id']);
        }

        if(isset($attributes['name']) && $attributes['name'] != null) {
            $categories->where('name',$attributes['name']);
        }

        if(isset($attributes['companyId']) && $attributes['companyId'] != null) {
            $categories->where('companyId',$attributes['companyId']);
        }

        // if(isset($attributes['departmentId']) && $attributes['departmentId'] != null) {
        //     $categories->where('departmentId',$attributes['departmentId']);
        // }

        return $categories->get();
    }

    public function destroy($id)
    {
        $categories = $this->model->all();

        // //delete soft
        // $this->model->find($id)->update(['isDeleted' => true]);
        $temp = $this->model->find($id);
        $temp->isDeleted = true;
        $temp->save();
    
        //change parentId of children
        foreach($categories as $category) {
            if($category->parentId == $id) {
                $category->parentId = $this->model->find($id)->parentId;
                $category->save();
            }
        }
    }
}
