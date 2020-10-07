<?php

namespace Modules\Crm\Repositories\Customer;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Illuminate\Support\Facades\DB;

use Modules\Crm\Entities\Customer;

class CustomerRepository extends BaseRepository implements CustomerInterfaceRepository
{

    public function getModel()
    {
        return new Customer();
    }

    public function allWithEmployee()
    {
        return $this->model->with('users')->where('is_deleted', 0)->get();
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

    public function updateLevel($newLevel, $id)
    {
        $customer = $this->model->find($id);
        $customer->level_id = $newLevel;
        $customer->save();
    }

    
    public function findByInfo(array $attributes)
    {
        $customer = $this->model->where('name',$attributes['info_customer'])
                    ->orWhere('phone', $attributes['info_customer'])
                    ->orWhere('email', $attributes['info_customer'])
                    ->orWhere('identification', $attributes['info_customer'])
                    ->orWhere('taxcode', $attributes['info_customer'])
                    ->first();
        return $customer;
    }
    

    public function filter(array $attributes)
    {
        $customer = $this->model->query();

        if (isset($attributes['info']) && $attributes['info'] != null) {
            return $this->model->where('name',$attributes['info'])
                    ->orWhere('phone', $attributes['info'])
                    ->orWhere('email', $attributes['info'])
                    ->orWhere('identification', $attributes['info'])
                    ->orWhere('taxcode', $attributes['info'])
                    ->get();
        }

        if (isset($attributes['author']) && $attributes['author'] != null) {
            $author = DB::table('users')->where('users.name','like','%'.$attributes['author'].'%')->get();
            foreach($author as $x) {
                $customer->orWhere('author',$x->id);
            }
        }

        if (isset($attributes['id']) && $attributes['id'] != null) {
            $customer->where('id',$attributes['id']);
        }

        if (isset($attributes['type_id']) && $attributes['type_id'] != null) {
            $customer->where('type_id',$attributes['type_id']);
        }

        if (isset($attributes['address']) && $attributes['address'] != null) {
            $customer->where('address','like','%'.$attributes['address'].'%');
        }

        if (isset($attributes['phone']) && $attributes['phone'] != null) {
            $customer->where('phone',$attributes['phone']);
        }
    
        if (isset($attributes['email']) && $attributes['email'] != null) {
            $customer->where('email',$attributes['email']);
        }

        if (isset($attributes['create_date']) && $attributes['create_date'] != null) {
            $customer->where('created_at', '>=', $attributes['create_from_date'])
                    ->where('created_at', '<=', $attributes['create_to_date']);
        }
     
        return $customer->get();
    }

    public function destroy($id)
    {
        $customer = $this->model->find($id);
        DB::table('accountcuses')->where('customer_id',$id)->update(['is_deleted' => 1]);
        $customer->is_deleted = 1;
        $customer->save();
    }

    public function getAccount()
    {
        return $this->model->where('is_account', 1)->get();
    }

    // history activity
    public function allvg()
    {
        return $this->model->where('is_account', 1)->get();
    }

    public function freeCustomer()
    {
        return $this->model->where('is_deleted', 1)->get();
    }

    public function detail($id)
    {
        $customer = $this->model->find($id);
    }

}
