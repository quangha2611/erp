<?php 

namespace Modules\Crm\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Modules\Crm\Http\Requests\CalendarRequest;

use Modules\Crm\Repositories\Calendar\CalendarInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;

class CalendarService 
{
    protected $calendar, $customer;

    public function __construct(CalendarInterfaceRepository $calendar, CustomerInterfaceRepository $customer)
    {
        $this->calendar = $calendar;
        $this->customer = $customer;
    }

    public function getAll()
    {
        return $this->calendar->all();
    }

    public function store(Request $request)
    {
        // check if the account exists
        if($this->customer->getCustomerByInfo($request->customer_id) == null && $request->is_new_customer == 0) {
            Session::flash('message', 'Không tồn tại khách hàng!');
            return false;
        }

        // store new customer
        if($request->is_new_customer == 1) {
            $request->customer_id = $this->customer->storeByCalendar($request->only(['customer_name','customer_phone','customer_email','customer_website']));
        }

        $request->merge([
            'customer_id' => $this->customer->getCustomerByInfo($request->customer_id)->id,
            'begin_date_time' => $this->formatDateTime($request->begin_date_time),
            'end_date_time' => $this->formatDateTime($request->end_date_time),
        ]);

        $this->calendar->store($request->all());
    }

    public function formatDateTime($dateTime)
    {
        if($dateTime != null) {
            return str_replace("T"," ",$dateTime).":00";
        }

        return null;
    }

    public function find($id)
    {
        return $this->calendar->find($id);
    }

    public function update(Request $request, $id)
    {
        $request->merge([
            'begin_date_time' => $this->formatDateTime($request->begin_date_time),
            'end_date_time' => $this->formatDateTime($request->end_date_time),
        ]);

        $this->calendar->update($request->all(), $id);
    }

    public function destroy($id)
    {
        $this->calendar->destroy($id);
    }
}
