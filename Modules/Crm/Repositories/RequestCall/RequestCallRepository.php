<?php

namespace Modules\Crm\Repositories\RequestCall;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\RequestCall\RequestCallInterfaceRepository;

use Modules\Crm\Entities\RequestCall;

class RequestCallRepository extends BaseRepository implements RequestCallInterfaceRepository
{

    public function getModel()
    {
        return new RequestCall();
    }

    public function store(array $attributes)
    {
        $newRequestCall = $this->model->create($attributes);
        return $newRequestCall;
    }
 
}
