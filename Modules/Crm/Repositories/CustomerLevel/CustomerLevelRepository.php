<?php

namespace Modules\Crm\Repositories\CustomerLevel;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\CustomerLevel\CustomerLevelInterfaceRepository;

use Modules\Crm\Entities\CustomerLevel;

class CustomerLevelRepository extends BaseRepository implements CustomerLevelInterfaceRepository
{

    public function getModel()
    {
        return new CustomerLevel();
    }
 
}
