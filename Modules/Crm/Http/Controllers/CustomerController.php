<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;
use Modules\Crm\Http\Requests\CustomerRequest;

use Modules\Crm\Services\CustomerService;
use Modules\Crm\Services\CustomerLevelService;
use Modules\Crm\Entities\CustomerMajor;
use Modules\Crm\Entities\CustomerSource;

class CustomerController extends Controller
{
    protected $customer;
    protected $customerLevel;

    public function __construct (CustomerService $customer, CustomerLevelService $customerLevel)
    {
        $this->customer = $customer;
        $this->customerLevel = $customerLevel;
    }

    public function index()
    {
        $customers = $this->customer->index();
        $customerLevels = $this->customerLevel->all();
        $currentLevel = 0;
     
        return view('crm::pages.customer.index', compact('customers','customerLevels','currentLevel'));
    }

    public function index2($parentLevel)
    {   
        $customers = $this->customer->getindex2($parentLevel);

        $customerLevels = $this->customerLevel->all();
        $currentLevel = $parentLevel;
     
        return view('crm::pages.customer.index', compact('customers','customerLevels','currentLevel'));
    }

    public function add ()
    {
        $majors = CustomerMajor::all();
        $sources = CustomerSource::all();
        return view('crm::pages.lead.add', compact('majors', 'sources'));
    }

    public function store(CustomerRequest $request) 
    {
        // dd($request->all());
        $this->customer->store($request->all());

        if ($request->afterSubmit == 'continue') {
            return redirect()->route('get.crm.lead.add');
        }

        return redirect()->route('get.crm.customer.index');
    }


    public function getDataExcel($customers)
    {
        $data = [];
        foreach($customers as $customer) {
            array_push($data,[
                $customer->id,
                $customer->name,
                $customer->company,
                $customer->major,
                $customer->phone,
                $customer->email,
                $customer->website,
                $customer->type->name,
                $customer->level->name,
            ]);
        }

        return $data;
    }

    public function excel()
    {
        $customers = $this->customer->index();
        // data to export excel
        $data = $this->getDataExcel($customers);

        $data = new CustomerExport($data);

        return Excel::download($data, 'customers.xlsx');  
    }


    public function companyResource()
    {
        $customers = $this->customer->index();
        $customerLevels = $this->customerLevel->all();
        $currentLevel = 0;

        return view('crm::pages.customer.companyResource', compact('customers','customerLevels','currentLevel'));
    }

    public function companyResource2($parentLevel)
    {
        $customers = $this->customer->getindex2($parentLevel);

        $customerLevels = $this->customerLevel->all();
        $currentLevel = 0;

        return view('crm::pages.customer.companyResource', compact('customers','customerLevels','currentLevel'));
    }
    

    public function create()
    {
        return view('crm::create');
    }

    
    public function show($id)
    {
        return view('crm::show');
    }

    
    public function edit($id)
    {
        return view('crm::edit');
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
