<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

use App\User;
use App\Company;
use Modules\Crm\Entities\Action;
use Modules\Crm\Http\Requests\CalendarRequest;
use Modules\Crm\Http\Requests\PhoneCallRequest;
use Modules\Crm\Http\Requests\RequestCallRequest;

use Modules\Crm\Services\ActivityService;
use Modules\Crm\Services\CustomerService;
use Modules\Crm\Services\CalendarService;

class ActivityController extends Controller
{
    protected $activity;
    protected $customer;
    protected $calendar;

    public function __construct(ActivityService $activity, CustomerService $customer, CalendarService $calendar) 
    {
        $this->activity      = $activity;
        $this->customer      = $customer;
        $this->calendar      = $calendar;
    }
    
    public function index()
    {
        $actions = Action::all();
        $activities = $this->activity->getAll();
        return view('crm::pages.activity.index',compact('activities', 'actions'));
    }

    public function indexvg()
    {
        $activities = $this->activity->getAll();
        return view('crm::pages.activity.indexvg',compact('activities'));
    }

    public function listcall()
    {
        $activities = $this->activity->listcall();
        return view('crm::pages.activity.listcall',compact('activities'));
    }

    public function yourListcall()
    {
        $activities = $this->activity->yourListcall();
        return view('crm::pages.activity.yourListcall',compact('activities'));
    }

    public function allListcall()
    {
        $activities = $this->activity->listcall();
        return view('crm::pages.activity.allListcall',compact('activities'));
    }

    public function create()
    {
        return view('crm::create');
    }

    
    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        return view('crm::show');
    }

    public function filter(Request $request)
    {
        $activities = $this->activity->filter($request->all());
        $actions = Action::all();
        return view('crm::pages.activity.index',compact('activities', 'actions'));
    }

    public function filterListCall (Request $request)
    {
        $activities = $this->activity->filterListCall($request->all());

        return view('crm::pages.activity.listcall',compact('activities'));
    }

    public function edit($id)
    {
        $activity = $this->activity->find($id);
        return view('crm::pages.activity.edit',compact('activity'));
    }


    public function update(Request $request, $id)
    {
        $this->activity->update($request->all(), $id);
        return redirect()->route('get.crm.activity.index');
    }

    public function addMeeting($id)
    {
        $users = User::all();
        $companies = Company::all();
        $customerLevels = $this->activity->getDataCustomerLevel();
        $customer = $this->customer->find($id);

        return view('crm::pages.activity.addMeeting',compact('users','customer','customerLevels','companies'));
    }

    public function storeMeeting(CalendarRequest $request)
    {
        $this->activity->storeMeeting($request);
        return redirect()->route('get.crm.customer.index');
    }


    public function addCalendar($id)
    {
        $users = User::all();
        $companies = Company::all();
        $customer = $this->customer->find($id);

        return view('crm::pages.activity.addCalendar',compact('users','customer','companies'));
    }

    public function storeCalendar(CalendarRequest $request)
    {
        $this->activity->storeCalendar($request->all());
        return redirect()->route('get.crm.customer.index');
    }

    public function addPhoneCall($id)
    {
        $phoneCallResults = $this->activity->getDataPhoneCallResult();
        $customerLevels = $this->activity->getDataCustomerLevel();
        $users = User::all();
        $companies = Company::all();
        $customer = $this->customer->find($id);

        return view('crm::pages.activity.addPhoneCall',compact('users','customer','customerLevels','phoneCallResults', 'companies'));
    }

    public function storePhoneCall(PhoneCallRequest $request)
    {
        //check call result
        if ($request->status_id == 1) {
            $validator = Validator::make($request->all(), [
                'result_id' => 'required',
            ],
            [
                'required'  => ':attribute không được để trống',
            ],
            [
                'result_id' => 'Kết quả',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }   
        }
        // validate new calendar
        if ($request->create_new_calendar == 1) {
            $requestNewCalendar = new Request;
            $requestNewCalendar->merge([
                'calendar_title' => $request->calendar_title,
                'location' => $request->calendar_location,
                'joins' => $request->joins,
                'begin_date_time' => $request->calendar_begin_date_time,
                'end_date_time' => $request->calendar_end_date_time,
                'descrition' => $request->calendar_description,
                'company_id' => $request->company_id]);
            
            $validator = Validator::make($requestNewCalendar->all(), [
                'company_id'      => 'required',
                'calendar_title'  => 'required|min:4',
                'begin_date_time' => 'required',
                'joins'           => 'required',
                'location'        => 'required'
            ],
            [
                'required'        => ':attribute không được để trống',
                'min'             => ':attribute phải ít nhất :min ký tự',
            ],
            [
                'company_id'      => 'Công ty',
                'calendar_title'  => 'Tiêu đề sự kiện',
                'begin_date_time' => 'Thời gian bắt đầu',
                'joins'           => 'Người tham gia',
                'location'        => 'Địa điểm hẹn',
            ]);
            
            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }    
        }

        $this->activity->storePhoneCall($request->all());

        return redirect()->route('get.crm.customer.index');  
    }

    public function addRequestCall($id)
    {
        $users = User::all();
        $customer = $this->customer->find($id);

        return view('crm::pages.activity.addRequestCall',compact('users','customer'));
    }

    public function storeRequestCall(RequestCallRequest $request)
    {
        // dd($request->all());
        $this->activity->storeRequestCall($request->all());

        return redirect()->route('get.crm.activity.index');  

    }

    public function destroy($id)
    {
        //
    }
}
