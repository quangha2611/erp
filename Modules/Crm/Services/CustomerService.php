<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;


class CustomerService 
{

    protected $customer;

    public function __construct(CustomerInterfaceRepository $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        return $this->customer->all();
    }

}

?>