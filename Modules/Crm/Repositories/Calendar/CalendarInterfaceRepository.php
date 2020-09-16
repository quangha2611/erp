<?php

namespace Modules\Crm\Repositories\Calendar;

use Modules\Crm\Repositories\BaseInterfaceRepository;

interface CalendarInterfaceRepository extends BaseInterfaceRepository
{
    public function storeByMeeting(array $attributes);

    public function storeByPhoneCall(array $attributes);

    public function filter(array $attributes);

}