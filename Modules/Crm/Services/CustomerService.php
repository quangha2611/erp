<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;


class CustomerService 
{

    protected $customer;
    protected $activity;

    public function __construct(CustomerInterfaceRepository $customer, ActivityInterfaceRepository $activity)
    {
        $this->customer = $customer;
        $this->activity = $activity;
    }

    public function index()
    {
        $customers = $this->customer->all();

        foreach ($customers as $customer) {
            $customer['countActivity'] = count($this->activity->filter(['customer_id' => $customer->id]));
        }

        return $customers;
    }

    public function find($id)
    {
        return $this->customer->find($id);
    }

    public function getindex2($parentLevel)
    {
        $customers = $this->customer->all();
        foreach ($customers as $customer) {
            $customer['countActivity'] = count($this->activity->filter(['customer_id' => $customer->id]));
        }
        $data = [];

        foreach ($customers as $customer) {
            if ($customer->level->parent_id == $parentLevel) {
                array_push($data, $customer);
            }
        }

        return $data;
    }

}

?>