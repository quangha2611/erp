<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Modules\Crm\Http\Requests\CalendarRequest;
use Modules\Crm\Services\CalendarService;

use App\Company;
use App\User;

class CalendarController extends Controller
{
    protected $calendar;

    public function __construct(CalendarService $calendar)
    {
        $this->calendar = $calendar;
    }

    public function index()
    {
        $calendars = $this->calendar->getAll();
        return view('crm::pages.calendar.index',compact('calendars'));
    }

    public function personal()
    {
        $calendars = $this->calendar->getAll();

        $data = [];
        foreach($calendars as $calendar) {
            foreach($calendar->users as $user) {
                if($user->id == Auth::user()->id) {
                    array_push($data,(object)[
                        'title'  => $calendar->title,
                        'start'  => $calendar->begin_date_time,
                        'end'    => $calendar->end_date_time,
                    ]);
                }
            }
        }
        return view('crm::pages.calendar.personal',compact('calendars','data'));
    }

    public function create()
    {
        $companies = Company::all();
        $users     = User::all();

        return view('crm::pages.calendar.create', compact('companies','users'));
    }

    
    public function store(CalendarRequest $request)
    {   
        if ($request->is_new_customer == 1 ) {
            $requestNewCustomer = new Request;
            $requestNewCustomer->merge($request->only(['name','phone','email','website']));

            $validator = Validator::make($requestNewCustomer->all(), [
                'name'  => 'required|min:4',
                'phone' => 'required|unique:customers',
                'email' => 'required|unique:customers',
            ],
            [
                'required' => ':attribute không được để trống',
                'min'      => ':attribute tối thiểu :min ký tự',
                'numeric'  => ':attribute phải là số ',
                'unique'   => ':attribute không được trùng'
            ],
            [
                'name'  => 'Tên khách hàng',
                'phone' => 'Số điện thoại khách hàng',
                'email' => 'Email khách hàng'
            ]);

            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }    
        }


        
        $check = $this->calendar->store($request);
        if($check == false) {
            return redirect()->back()->withInput($request->all());
        }

        return redirect()->route('get.crm.calendar.create');
    }

    
    public function show($id)
    {
        return view('crm::show');
    }


    public function edit($id)
    {
        $calendar = $this->calendar->find($id);
        $users     = User::all();
        return view('crm::pages.calendar.edit',compact('calendar','users'));
    }

    public function update(CalendarRequest $request, $id)
    {
        $this->calendar->update($request, $id);

        return redirect()->route('get.crm.calendar.index');
    }

     
    public function destroy(Request $request)
    {
        $this->calendar->destroy($request->id);

        return redirect()->route('get.crm.calendar.index');
    }
}
