<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;

use Modules\Crm\Services\CustomerService;
use Modules\Crm\Services\CustomerLevelService;

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


    public function getDataExcel($customers)
    {
        $data = [];
        foreach($customers as $customer) {
            array_push($data,[
                $customer->id,
                $customer->name,
                $customer->company->name,
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
    

    public function create()
    {
        return view('crm::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('crm::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('crm::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
