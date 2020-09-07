<?php

namespace Modules\Crm\Repositories\Customer;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;

use Modules\Crm\Entities\Customer;

class CustomerRepository extends BaseRepository implements CustomerInterfaceRepository
{

    public function getModel()
    {
        return new Customer();
    }

    public function getCustomerByInfo($attribute)
    {
       return $this->model->where('email',$attribute)->orWhere('phone',$attribute)->orWhere('website',$attribute)->first();
    }

    public function storeByCalendar(array $attributes)
    {
        $newCutomer = $this->getModel();
        $newCutomer->name = $attributes['customer_name'];
        $newCutomer->phone = $attributes['customer_phone'];
        $newCutomer->email = $attributes['customer_email'];
        $newCutomer->website = $attributes['customer_website'];
        $newCutomer->save();
        return $newCutomer->phone;
    }

    
}
