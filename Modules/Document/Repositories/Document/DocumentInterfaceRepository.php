<?php

namespace Modules\Document\Repositories\Document;

use Modules\Document\Repositories\BaseInterfaceRepository;

interface DocumentInterfaceRepository extends BaseInterfaceRepository
{

    public function filter(array $attributes);
    
}
