<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\CustomerLevel\CustomerLevelInterfaceRepository;


class CustomerLevelService 
{

    protected $customerLevel;

    public function __construct(CustomerLevelInterfaceRepository $customerLevel)
    {
        $this->customerLevel = $customerLevel;
    }

    public function all()
    {
        return $this->customerLevel->all();
    }

}

?>