<?php

namespace Modules\Document\Repositories\Document;

use Modules\Document\Repositories\BaseRepository;
use Modules\Document\Repositories\Document\DocumentInterfaceRepository;
use Modules\Document\Entities\Document;
use Modules\Document\Repositories\DocumentCategory\DocumentCategoryRepository;
use App\Company;
use App\User;
use Modules\Document\Entities\DocumentFile;


class DocumentRepository extends BaseRepository implements DocumentInterfaceRepository
{
    public function getModel()
    {
        return new Document();
    }

    public function index()
    {
        $documents = $this->model->all();
        foreach($documents as $document) {
            //change companyid to companyname
            $document->companyId = Company::findOrFail($document->companyId)->name;

            //count file
            $document->count_file = count(DocumentFile::where('document',$document->id)->get());

            //change categoryid to categoryname
            $documentCategory = new DocumentCategoryRepository;
            $document->categoryId = $documentCategory->find($document->categoryId)->name;

            //get author name
            $document->author = User::find($document->author)->name;
        }
        return $documents;
    }


    public function filter (array $attributes)
    {
        $documents =$this->model->query();
        
        if(isset($attributes['id']) && $attributes['id'] != null) {
            $documents->where('id',$attributes['id']);
        }

        if(isset($attributes['name']) && $attributes['name'] != null) {
            $documents->where('name',$attributes['name']);
        }

        if(isset($attributes['companyId']) && $attributes['companyId'] != null) {
            $documents->where('companyId',$attributes['companyId']);
        }

        if(isset($attributes['categoryId']) && $attributes['categoryId'] != null) {
            $documents->where('categoryId',$attributes['categoryId']);
        }

        return $documents->get();

    }

    public function store(array $attributes)
    {
        $this->model->create($attributes);
    }
}
