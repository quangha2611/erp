<?php 

namespace Modules\Crm\Services;

use App\User;
use Modules\Crm\Http\Requests\CalendarRequest;
use Modules\Crm\Repositories\Activity\ActivityInterfaceRepository;
use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\PhoneCallResult\PhoneCallResultInterfaceRepository;
use Modules\Crm\Repositories\PhoneCall\PhoneCallInterfaceRepository;
use Modules\Crm\Repositories\RequestCall\RequestCallInterfaceRepository;
use Modules\Crm\Repositories\CustomerLevel\CustomerLevelInterfaceRepository;

class ActivityService 
{
    protected $activity;
    protected $calendar;
    protected $customer;
    protected $phoneCallResult;
    protected $phoneCall;
    protected $requestCall;
    protected $customerLevel;

    public function __construct(ActivityInterfaceRepository $activity, CalendarInterfaceRepository $calendar, CustomerInterfaceRepository $customer, PhoneCallResultInterfaceRepository $phoneCallResult, CustomerLevelInterfaceRepository $customerLevel, PhoneCallInterfaceRepository $phoneCall,  RequestCallInterfaceRepository $requestCall)
    {
        $this->activity          = $activity;
        $this->calendar          = $calendar;
        $this->customer          = $customer;
        $this->phoneCallResult   = $phoneCallResult;
        $this->phoneCall         = $phoneCall;
        $this->requestCall       = $requestCall;
        $this->customerLevel     = $customerLevel;
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

    public function filter(array $attributes)
    {
        // get limit of date
        if ( isset($attributes['date']) && $attributes['date'] != null) {
            $attributes['from_date'] = $this->fomartDate(explode(" - ", $attributes['date'])[0]);
            $attributes['to_date']   = $this->fomartDate(explode(" - ", $attributes['date'])[1]);  
        }

        // get id of author
        if ( isset($attributes['author']) && $attributes['author'] != null) {
            $author = User::where('name', $attributes['author'])->first();
            $author != null ? $attributes['author'] = $author->id : $attributes['author'] = 0;
        }


        return $this->activity->filterIndex($attributes);
    }

    public function filterListCall(array $attributes) 
    {
        // get id of author
        if ( isset($attributes['author']) && $attributes['author'] != null) {
            $author = User::where('name', $attributes['author'])->first();
            $author != null ? $attributes['author'] = $author->id : $attributes['author'] = 0;
        }

        // get id of tele sale
        if ( isset($attributes['tele_sale']) && $attributes['tele_sale'] != null) {
            $teleSale = User::where('name', $attributes['tele_sale'])->first();
            $teleSale != null ? $attributes['tele_sale'] = $teleSale->id : $attributes['tele_sale'] = 0;
        }

        // get limit of date
        if ( isset($attributes['date']) && $attributes['date'] != null) {
            $attributes['from_date'] = $this->fomartDate(explode(" - ", $attributes['date'])[0]);
            $attributes['to_date']   = $this->fomartDate(explode(" - ", $attributes['date'])[1]);  
        }

        return $this->activity->filterListCall($attributes);
    }

    public function fomartDate($date)
    {
        $array = explode("/", $date);
        return "$array[2]-$array[1]-$array[0]";
    }

    public function update(array $attributes, $id)
    {
        $this->activity->update($attributes, $id);
    }

    public function storeMeeting(CalendarRequest $request)
    {
        // Add new calendar
        $newCalendar = $this->calendar->storeByMeeting($request->only(['customer_id', 'company_id', 'title', 'begin_date_time','end_date_time' ,'joins', 'location','author', 'description']));

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

        // $this->activity->store([
        //     'customer_id'   => $attributes['customer_id'], 
        //     'title'         => $attributes['title'],
        //     'content'       => $attributes['content'],
        //     'action_id'     => $attributes['action_id'],
        //     'calendar_id'   => $newCalendar['id'], 
        //     'phone_call_id' => $newPhoneCall->id,
        //     'author'        => $attributes['author'],
        // ]);
    }

    public function storePhoneCall(array $attributes)
    {
        if (isset($attributes['create_new_calendar']) && $attributes['create_new_calendar'] == 1) {
            // Add new calendar
            $newCalendar = $this->calendar->storeByPhoneCall([
                'customer_id'     => $attributes['customer_id'], 
                'company_id'      => $attributes['company_id'], 
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


    public function storeRequestCall(array $attributes)
    {
        $currentDate = date('Y-m-d');
        if($attributes['request_time_call'] == 0) {
            $attributes['request_time_call'] = $currentDate;
        }

        if($attributes['request_time_call'] == 1) {
            $attributes['request_time_call'] = date('Y-m-d', strtotime($currentDate. ' + 1 days'));
        }

        if($attributes['request_time_call'] == 2) {
            $attributes['request_time_call'] = date('Y-m-d', strtotime($currentDate. ' + 2 days'));
        }

        if($attributes['request_time_call'] == 7) {
            $attributes['request_time_call'] = date('Y-m-d', strtotime($currentDate. ' + 1 week'));
        }

        $newRequestCall = $this->requestCall->store($attributes);
        $attributes['request_call_id'] = $newRequestCall->id;
        $this->activity->store($attributes);
        return true;
        // dd('ok');
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
