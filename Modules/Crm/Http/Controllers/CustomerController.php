<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use App\Exports\CustomerExport;
use Modules\Crm\Http\Requests\CustomerRequest;
use Modules\Crm\Entities\CustomerType;

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
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
        $currentLevel = 0;
     
        return view('crm::pages.customer.index', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function indexvg()
    {
        $customers = $this->customer->indexvg();
        $customerLevels = $this->customerLevel->all();
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
        $currentLevel = 0;
     
        return view('crm::pages.customer.indexvg', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function freeCustomer()
    {
        $customers = $this->customer->freeCustomer();
        $customerLevels = $this->customerLevel->all();
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
        $currentLevel = 0;
     
        return view('crm::pages.customer.freeCustomer', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function index2($parentLevel)
    {   
        $customers = $this->customer->getindex2($parentLevel);

        $customerLevels = $this->customerLevel->all();
        $currentLevel = $parentLevel;
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
     
        return view('crm::pages.customer.index', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function add ()
    {
        $majors = CustomerMajor::all();
        $sources = CustomerSource::all();
        return view('crm::pages.lead.add', compact('majors', 'sources'));
    }

    public function store(CustomerRequest $request) 
    {
        if ($request->type_id == 2) {
            $validator = Validator::make($request->all(), [
                'company' => 'required',
                'taxcode' => 'required'
            ],
            [
                'required' => ':attribute không được để trống',
                'min'      => ':attribute phải ít nhất :min ký tự',
            ],
            [
                'company' => 'Tên doanh nghiệp',
                'taxcode' => 'Mã số thuế'
            ]);
            
            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }    
        }
        
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
                $customer->major->name,
                $customer->phone,
                $customer->email,
                $customer->address,
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
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();

        return view('crm::pages.customer.companyResource', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function companyResource2($parentLevel)
    {
        $customers = $this->customer->getindex2($parentLevel);

        $customerLevels = $this->customerLevel->all();
        $currentLevel = 0;
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();

        return view('crm::pages.customer.companyResource', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function search(Request $request) 
    {
        return view('crm::pages.lead.search');
    }

    public function filter(Request $request)
    {
        $customers = $this->customer->filter($request->all());
        $customerLevels = $this->customerLevel->all();
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
        $currentLevel = 0;
        return view('crm::pages.customer.index', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function filterCompanyResource(Request $request)
    {
        $customers = $this->customer->filter($request->all());
        $customerLevels = $this->customerLevel->all();
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
        $currentLevel = 0;
        return view('crm::pages.customer.companyResource', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    
    public function show(Request $request)
    {
        $customer = null;
        session()->flashInput($request->all());
        if ( isset($request->info_customer) && $request->info_customer != null) {
            $customer = $this->customer->findByInfo($request->all());
        }
        return view('crm::pages.lead.search', compact('customer'));
    }

    
    public function edit($id)
    {
        $customer = $this->customer->find($id);
        $majors = CustomerMajor::all();
        $sources = CustomerSource::all();
        return view('crm::pages.account.edit', compact('customer', 'majors', 'sources'));
    }

   
    public function update(Request $request, $id)
    {
        // check type is personal
        if ($request->type_id == 1) {
            $validator = Validator::make($request->all(), [
                'type_id'         => 'required',
                'name'            => 'required',
                'phone'           => 'required',
                'major_id'        => 'required',
                'email'           => 'required',
                'source_id'       => 'required',
                'identification'  => 'required|min:10',
                'address'         => 'required|min:5',
            ],
            [
                'required' => ':attribute không được để trống',
                'min'      => ':attribute phải ít nhất :min ký tự',
            ],
            [
                'type_id'         => 'Loại thông tin',
                'name'            => 'Tên cá nhân',
                'phone'           => 'Điện thoại',
                'major_id'        => 'Chuyên ngành',
                'email'           => 'Email',
                'source_id'       => 'Nguồn thông tin',
                'identification'  => 'CMND',
                'taxcode'         => 'Mã số thuế ',
                'address'         => 'Địa chỉ',
            ]);

            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }  
        }

        // check type is company
        if ($request->type_id == 2) {
            $validator = Validator::make($request->all(), [
                'type_id'         => 'required',
                'name'            => 'required',
                'phone'           => 'required',
                'major_id'        => 'required',
                'email'           => 'required',
                'source_id'       => 'required',
                'identification'  => 'required|min:10',
                'address'         => 'required|min:5',
                'company' => 'required',
                'taxcode' => 'required'
            ],
            [
                'required' => ':attribute không được để trống',
                'min'      => ':attribute phải ít nhất :min ký tự',
            ],
            [
                'type_id'         => 'Loại thông tin',
                'name'            => 'Tên cá nhân',
                'phone'           => 'Điện thoại',
                'major_id'        => 'Chuyên ngành',
                'email'           => 'Email',
                'source_id'       => 'Nguồn thông tin',
                'identification'  => 'CMND',
                'taxcode'         => 'Mã số thuế ',
                'address'         => 'Địa chỉ',
                'company' => 'Tên doanh nghiệp',
                'taxcode' => 'Mã số thuế'
            ]);
            
            if ($validator->fails()) {
                return redirect()
                            ->back()
                            ->withErrors($validator)
                            ->withInput($request->all());
            }    
        }

        $this->customer->update($request->all());
        return redirect()->route('get.crm.customer.index');
    }

    
    public function destroy($id)
    {
        $this->customer->destroy($id);
        return back();
    }

    public function accountIndex()
    {

        $customers = $this->customer->getAccount();
        $customerLevels = $this->customerLevel->all();
        $customerTypes = CustomerType::all();
        $customerSources = CustomerSource::all();
        $currentLevel = 0;

        return view('crm::pages.account.index', compact('customers','customerLevels','currentLevel', 'customerTypes', 'customerSources'));
    }

    public function detail($id)
    {
        $customer = $this->customer->detail($id);
        return view('crm::pages.customer.detail', compact(['customer']));
    }
}
