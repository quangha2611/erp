<?php 

namespace Modules\Crm\Services;

use Modules\Crm\Http\Requests\CalendarRequest;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\PhoneCallResult\PhoneCallResultInterfaceRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallInterfaceRepository;
use Modules\Crm\Repositories\CustomerLevel\CustomerLevelInterfaceRepository;


class ActivityService 
{
    protected $activity;
    protected $calendar;
    protected $customer;
    protected $phoneCallResult;
    protected $phoneCall;
    protected $customerLevel;

    public function __construct(ActivityInterfaceRepository $activity, CalendarInterfaceRepository $calendar, CustomerInterfaceRepository $customer, PhoneCallResultInterfaceRepository $phoneCallResult, CustomerLevelInterfaceRepository $customerLevel, PhoneCallInterfaceRepository $phoneCall)
    {
        $this->activity        = $activity;
        $this->calendar        = $calendar;
        $this->customer        = $customer;
        $this->phoneCallResult = $phoneCallResult;
        $this->phoneCall       = $phoneCall;
        $this->customerLevel   = $customerLevel;
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

    public function storeMeeting(CalendarRequest $request)
    {
        // Add new calendar
        $newCalendar = $this->calendar->storeByMeeting($request->only(['customer_id', 'company_id', 'title', 'begin_date_time','end_date_time' ,'joins', 'location','author']));

        // Add new activity
        $request->merge(['calendar_id' => $newCalendar->id]);
        $this->activity->store($request->only(['customer_id', 'title','content','action_id','calendar_id', 'author']));

        // Update customer's level
        $this->customer->updateLevel($request->level_id, $request->customer_id);
    }

    public function storeCalendar(array $attributes)
    {
        // Add new calendar
        $this->calendar->store($attributes);
    }

    public function storePhoneCall(array $attributes)
    {
        if (isset($attributes['create_new_calendar']) && $attributes['create_new_calendar'] == 1) {
            // Add new calendar
            $newCalendar = $this->calendar->storeByPhoneCall([
                'customer_id'     => $attributes['customer_id'], 
                'company_id'     => $attributes['company_id'], 
                'title'           => $attributes['calendar_title'], 
                'begin_date_time' => $attributes['calendar_begin_date_time'],
                'end_date_time'   => $attributes['calendar_end_date_time'] ,
                'joins'           => $attributes['joins'], 
                'location'        => $attributes['calendar_location'],
                'author'          => $attributes['author'],
            ]);
        } else {
            $newCalendar = ['id'=>0];
        }

        //store phone call 
        $newPhoneCall = $this->phoneCall->store($attributes);
        
        // Add new activity
        $this->activity->store([
            'customer_id'   => $attributes['customer_id'], 
            'title'         => $attributes['title'],
            'content'       => $attributes['content'],
            'action_id'     => $attributes['action_id'],
            'calendar_id'   => $newCalendar['id'], 
            'phone_call_id' => $newPhoneCall->id,
            'author'        => $attributes['author'],
        ]);

        // Update customer's level
        if( isset($attributes['update_customer_level'])) {
            $this->customer->updateLevel($attributes['level_id'], $attributes['customer_id']);
        }
    }

    public function getDataPhoneCallResult()
    {
        return $this->phoneCallResult->all();
    }

    public function getDataCustomerLevel()
    {
        return $this->customerLevel->all();
    }
}
