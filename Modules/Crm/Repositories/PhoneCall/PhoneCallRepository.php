<?php

namespace Modules\Crm\Repositories\PhoneCall;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallInterfaceRepository;

use Modules\Crm\Entities\PhoneCall;

class PhoneCallRepository extends BaseRepository implements PhoneCallInterfaceRepository
{

    public function getModel()
    {
        return new PhoneCall();
    }

    public function all()
    {
        return $this->model->all();
    }

    public function store(array $attributes) {
        $newPhoneCall = $this->model->create($attributes);
        return $newPhoneCall;
    }
 
}
