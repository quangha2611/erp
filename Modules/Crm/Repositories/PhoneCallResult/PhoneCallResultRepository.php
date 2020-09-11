<?php

namespace Modules\Crm\Repositories\PhoneCallResult;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\PhoneCallResult\PhoneCallResultInterfaceRepository;

use Modules\Crm\Entities\PhoneCallResult;

class PhoneCallResultRepository extends BaseRepository implements PhoneCallResultInterfaceRepository
{

    public function getModel()
    {
        return new PhoneCallResult();
    }

    public function all()
    {
        return $this->model->all();
    }
 
}
