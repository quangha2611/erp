<?php

namespace Modules\Crm\Repositories\Calendar;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Http\Requests\CalendarRequest;


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
        return $newCalendar;
    }

    public function update(array $attributes, $id)
    {
        $updateCalendar = $this->model->find($id);
        $updateCalendar->update($attributes);
        $updateCalendar->users()->sync($attributes['joins']);
    }

    public function storeByMeeting(array $attributes)
    {
        $newCalendar = $this->model->create($attributes);
        $newCalendar->users()->attach($attributes['joins']);
        return $newCalendar;
    }

    public function storeByPhoneCall(array $attributes)
    {
        $newCalendar = $this->model->create($attributes);
        $newCalendar->users()->attach($attributes['joins']);
        return $newCalendar;
    }

    public function filter(array $attributes)
    {
        $calendars = $this->model->query();
        if (isset($attributes['company_id']) && $attributes['company_id'] != null) {
            $calendars->where('company_id', $attributes['company_id']);
        }

        if (isset($attributes['begin_date_time']) && $attributes['begin_date_time'] != null) {
            $calendars->where('begin_date_time', '>', $attributes['begin_date_time']);
        }

        return $calendars->get();
    }

}
