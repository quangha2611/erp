<?php

namespace Modules\Crm\Services;

use Illuminate\Http\Request;
use Modules\Crm\Repositories\Contact\ContactInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Illuminate\Support\Facades\Session;


class ContactService
{
    protected $contact;
    protected $customer;

    public function __construct(ContactInterfaceRepository $contact, CustomerInterfaceRepository $customer)
    {
        $this->contact  = $contact;
        $this->customer = $customer;
    }

    public function all()
    {
        return $this->contact->all();
    }

    public function store(array $attributes)
    {
        // check if the account exists
        $customer = $this->customer->getCustomerByInfo($attributes['customer_id']);

        if ($customer == null) {
            Session::flash('message', 'Không tồn tại khách hàng!');
            return false;
        } 

        $attributes['customer_id'] = $customer->id;
        $this->contact->store($attributes); 
        return true;      
    }

    public function find($id)
    {
        return $this->contact->find($id);
    }

    public function destroy($id)
    {
        $this->contact->destroy($id);
    }
}
