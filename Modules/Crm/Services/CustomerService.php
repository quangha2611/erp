<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Modules\Crm\Entities\CustomerMajor;

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

    // history activity
    public function indexvg()
    {
        $customers = $this->customer->allvg();

        foreach ($customers as $customer) {
            $customer['lastActivity']   = $this->activity->lastActivity(['customer_id' => $customer->id]);
            $customer['countActivity'] = count($this->activity->filter(['customer_id' => $customer->id]));
        }

        return $customers;
    }

    public function freeCustomer()
    {
        $customers = $this->customer->freeCustomer();

        foreach ($customers as $customer) {
            $customer['lastActivity']   = $this->activity->lastActivity(['customer_id' => $customer->id]);
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

    public function update(array $attributes) {
        $this->customer->update($attributes, $attributes['id']);
    }

    public function store(array $attributes) 
    {
        $this->customer->store($attributes);
    }

    public function findByInfo(array $attributes) 
    {
        $customer = $this->customer->findByInfo($attributes);
        return $customer;
    }

    public function destroy($id) 
    {
        $this->customer->destroy($id);
    }

    public function filter(array $attributes)
    {
        // get limit of create date
        if ( isset($attributes['create_date']) && $attributes['create_date'] != null) {
            $attributes['create_from_date'] = $this->fomartDate(explode(" - ", $attributes['create_date'])[0]);
            $attributes['create_to_date']   = $this->fomartDate(explode(" - ", $attributes['create_date'])[1]);

        }
        $customers = $this->customer->filter($attributes);

        foreach ($customers as $customer) {
            $customer['countActivity'] = count($this->activity->filter(['customer_id' => $customer->id]));
        }
        
        return $customers;
    }

    public function fomartDate($date)
    {
        $array = explode("/", $date);
        return "$array[2]-$array[1]-$array[0]";
    }

    public function getAccount()
    {
        $customers = $this->customer->getAccount();

        foreach ($customers as $customer) {
            $customer['countActivity'] = count($this->activity->filter(['customer_id' => $customer->id]));
        }

        return $customers;
    }

    public function detail($id)
    {
        $customer = $this->customer->find($id);
        $customer['activities'] = $this->activity->getListActivity($id);
        return $customer;
    }

    public function getMajor()
    {
        return CustomerMajor::all();
    }
}

?>