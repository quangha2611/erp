<?php

namespace Modules\Crm\Repositories\Activity;

use Illuminate\Support\Facades\Auth;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Illuminate\Support\Facades\DB;

use Modules\Crm\Entities\Activity;

class ActivityRepository extends BaseRepository implements ActivityInterfaceRepository
{

    public function getModel()
    {
        return new Activity();
    }

    public function listcall()
    {
        return $this->model->where('action_id',4)->get();
    }

    public function yourListcall()
    {
        return $this->model->where('action_id',4)->where('author', Auth::user()->id)->get();
    }

    public function filter(array $attributes) {
        return $this->model->where('customer_id', $attributes['customer_id'])->get();
    }

    public function filterListCall(array $attributes) {
        $activities = $this->model->query();
        
        $activities->where('action_id',4);

        if (isset($attributes['account_id'])) {
            $activities->where('customer_id', $attributes['account_id']);
        }

        if (isset($attributes['author'])) {
            $activities->where('author', $attributes['author']);
        }

        if (isset($attributes['date']) && $attributes['date'] != null) {
            $activities->where('created_at', '>=', $attributes['from_date'])
                        ->where('created_at', '<=', $attributes['to_date']);
        }

        if (isset($attributes['tele_sale'])) {
            $data = [];
            $acts = $activities->get();
            foreach($acts as $act) {
                if($act->requestCall->tele_sale_id == $attributes['tele_sale']) {
                    array_push($data, $act);
                }
            }
             return $data;
        }

        return $activities->get();

    } 

    public function filterIndex(array $attributes) {

        $activities = $this->model->query();

        if (isset($attributes['id']) && $attributes['id'] != null) {
            $activities->where('id', $attributes['id']);
        }

        if (isset($attributes['account_id']) && $attributes['account_id'] != null) {
            $activities->where('customer_id', $attributes['account_id']);
        }

        if (isset($attributes['author']) && $attributes['author'] != null) {
            $activities->where('author', $attributes['author']);
        }

        if (isset($attributes['date']) && $attributes['date'] != null) {
            $activities->where('created_at', '>=', $attributes['from_date'])
                        ->where('created_at', '<=', $attributes['to_date']);
        }

        if (isset($attributes['action_id']) && $attributes['action_id'] != null) {
            $activities->where('action_id', $attributes['action_id']);
        }

        if (isset($attributes['account_info']) && $attributes['account_info'] != null) {
            $customers = DB::table('customers')->where('customers.name','like','%'.$attributes['account_info'].'%')->get();
            foreach($customers as $customer) {
                $activities->orWhere('customer_id',$customer->id);
            }
        }

        return $activities->get();
    }

    public function lastActivity($id)
    {
        return $this->model->where('customer_id', $id)->orderByRaw('id', 'DESC')->first();
    }

    public function getListActivity($id)
    {
        return $this->model->where('customer_id',$id)->orderByRaw('id', 'DESC')->get();
    }
}
