<?php

namespace Modules\Crm\Repositories\PhoneCall;

use Modules\Crm\Repositories\BaseInterfaceRepository;

interface PhoneCallInterfaceRepository extends BaseInterfaceRepository
{
    public function store(array $attributes);
}
