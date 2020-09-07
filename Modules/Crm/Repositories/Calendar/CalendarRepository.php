<?php

namespace Modules\Crm\Repositories\Calendar;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;

use Modules\Crm\Entities\Calendar;

class CalendarRepository extends BaseRepository implements CalendarInterfaceRepository
{

    public function getModel()
    {
        return new Calendar();
    }

    public function store(array $attributes)
    {
        $newCalendar = $this->model->create($attributes);
        $newCalendar->users()->attach($attributes['joins']);
    }

    public function update(array $attributes, $id)
    {
        $updateCalendar = $this->model->find($id);
        $updateCalendar->update($attributes);
        $updateCalendar->users()->sync($attributes['joins']);
    }

}
