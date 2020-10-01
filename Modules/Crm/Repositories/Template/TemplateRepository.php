<?php

namespace Modules\Crm\Repositories\Template;

use Illuminate\Support\Facades\Storage;
use Modules\Crm\Entities\ContractTemplate;
use Modules\Crm\Repositories\BaseRepository;

class TemplateRepository extends BaseRepository implements TemplateInterfaceRepository
{
    public function getModel()
    {
        return new ContractTemplate();
    }

    public function store(array $attributes)
    {
        $newTemplate = $this->model->create($attributes);
        Storage::disk('public')->putFileAs('crm/contract/template',$attributes['fileUpload'],'template'.$newTemplate->id.'.docx');  
    }
}