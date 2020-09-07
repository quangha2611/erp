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
        return $this->model->where('action_id',2)->get();
    }

    public function yourListcall()
    {
        return $this->model->where('action_id',2)->where('author', Auth::user()->id)->get();
    }
}
