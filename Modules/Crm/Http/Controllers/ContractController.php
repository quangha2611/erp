<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Company;
use App\User;
use Modules\Crm\Http\Requests\ContractRequest;

use Modules\Crm\Entities\CustomerMajor;
use Modules\Crm\Services\ContractService;
use Modules\Crm\Services\CustomerService;
use Modules\Crm\Services\ProductService;

class ContractController extends Controller
{
    
    protected $contract, $customer, $product;
    public function __construct(ContractService $contract,
                                CustomerService $customer,
                                ProductService $product)
    {
        $this->contract = $contract;
        $this->customer = $customer;
        $this->product  = $product;
    }

    public function index()
    {
        $contracts = $this->contract->all();
        // foreach($contracts as $contract) {
        //     dd($contract);
        // }
        $dataView = [
            'contracts' => $contracts
        ];
        
        return view('crm::pages.contract.index')->with($dataView);
    }

    
    public function create()
    {
        $customers      = $this->customer->getAccount();
        $customerMajors = $this->customer->getMajor();
        $companies      = Company::all();
        $users          = User::all();

        $viewData = [
            'customers'      => $customers,
            'customerMajors' => $customerMajors,
            'companies'      => $companies,
            'users'          => $users
        ];

        return view('crm::pages.contract.create')->with($viewData);
    }

    public function store(ContractRequest $request)
    {
        $this->contract->store($request->all());
        return redirect()->route('get.crm.contract.index');
    }

    // ajax
    public function getListProductsByCompany(Request $request)
    {
        $products = $this->product->getListProductsByCompany($request->company_id);
        return json_encode($products->toArray());
    }

    // ajax
    public function infoProduct(Request $request)
    {
        $product =  $this->product->infoProduct($request->product_id);
        return json_encode($product->toArray());
    }

    // ajax
    public function infoEmployee(Request $request)
    {
        $user =  User::find($request->user_id);
        return json_encode($user);
    }

    
    public function show()
    {
        return view('crm::pages.contract.show');
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

    public function transaction()
    {
        return view('crm::pages.contract.transaction');
    }

    public function showTransaction()
    {
        return view('crm::pages.contract.showTransaction');
    }
}
