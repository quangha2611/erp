<?php

namespace Modules\Document\Repositories\DocumentCategory;

use Modules\Document\Repositories\BaseInterfaceRepository;

interface DocumentCategoryInterfaceRepository extends BaseInterfaceRepository
{

    public function filter(array $attributes);
    
}
