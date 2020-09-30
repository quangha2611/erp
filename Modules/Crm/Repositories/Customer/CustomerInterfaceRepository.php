<?php

namespace Modules\Crm\Repositories\Customer;

use Modules\Crm\Repositories\BaseInterfaceRepository;

interface CustomerInterfaceRepository extends BaseInterfaceRepository
{
    public function getCustomerByInfo($attribute);
    
    public function storeByCalendar(array $attributes);

    public function updateLevel($newLevel, $id);

    public function getAccount();

    public function allvg();

    public function detail($id);
    
    public function freeCustomer();

    public function filter(array $attributes);

    public function findByInfo(array $attributes);

}