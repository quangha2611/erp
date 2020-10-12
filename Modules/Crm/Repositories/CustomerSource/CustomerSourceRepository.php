<?php

namespace Modules\Crm\Repositories\CustomerSource;


use Modules\Crm\Entities\CustomerSource;
use Modules\Crm\Repositories\BaseRepository;

class CustomerSourceRepository extends BaseRepository implements CustomerSourceInterfaceRepository
{
    public function getModel()
    {
        return new CustomerSource();
    }
}