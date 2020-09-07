<?php 

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;

class ActivityService 
{
    protected $activity;

    public function __construct(ActivityInterfaceRepository $activity)
    {
        $this->activity = $activity;
    }

    public function getAll() 
    {
        $activities = $this->activity->all();
        return $activities;
    }

    public function listcall()
    {
        return $this->activity->listcall();
    }

    public function yourListcall()
    {
        return $this->activity->yourListcall();
    }

    public function find($id)
    {
        return $this->activity->find($id);
    } 

    public function update(array $attributes, $id)
    {
        $this->activity->update($attributes, $id);
    }
}