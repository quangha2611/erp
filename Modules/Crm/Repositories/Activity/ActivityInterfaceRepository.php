<?php

namespace Modules\Crm\Repositories\Activity;

use Modules\Crm\Repositories\BaseInterfaceRepository;

interface ActivityInterfaceRepository extends BaseInterfaceRepository
{
 
    public function listcall();

    public function filter(array $attributes);

    public function lastActivity($id);

    public function getListActivity($id);
}