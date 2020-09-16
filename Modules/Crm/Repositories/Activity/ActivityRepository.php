<?php

namespace Modules\Crm\Repositories\Activity;

use Illuminate\Support\Facades\Auth;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;

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
}
