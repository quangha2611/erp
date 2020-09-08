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
        $newCutomer->name = $attributes['name'];
        $newCutomer->phone = $attributes['phone'];
        $newCutomer->email = $attributes['email'];
        $newCutomer->website = $attributes['website'];
        $newCutomer->save();
        return $newCutomer->phone;
    }

    
}
