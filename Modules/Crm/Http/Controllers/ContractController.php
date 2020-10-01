<?php

namespace Modules\Crm\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Company;
use App\Exports\ContractExport;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Modules\Crm\Entities\ContractType;
use Modules\Crm\Entities\ContractSignType;
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

        //update contract expried
        $contract->updateContractExpried();
    }

    public function index()
    {
        $contracts     = $this->contract->all();
        $contractTypes = ContractType::all(); 
        $dataView = [
            'contracts'     => $contracts,
            'contractTypes' => $contractTypes
        ];
        
        return view('crm::pages.contract.index')->with($dataView);
    }

    public function exportExcel()
    {
        return Excel::download(new ContractExport($this->contract), 'orders.xlsx');
    }
    
    public function create()
    {
        $customers         = $this->customer->getAccount();
        $customerMajors    = $this->customer->getMajor();
        $companies         = Company::all();
        $users             = User::all();
        $contractTypes     = ContractType::all(); 
        $contractSignTypes = ContractSignType::all(); 

        $viewData = [
            'customers'         => $customers,
            'customerMajors'    => $customerMajors,
            'companies'         => $companies,
            'users'             => $users,
            'contractTypes'     => $contractTypes,
            'contractSignTypes' => $contractSignTypes
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

    
    public function show($id)
    {
        $contract = $this->contract->find($id);
        $dataView = [
            'contract' =>$contract,
        ];
        return view('crm::pages.contract.detail')->with($dataView);
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
        $contractTransactions = $this->contract->getAllTransaction();
        // dd($contractTransactions[0]->is_checked);
        $dataView = [
            'contractTransactions' => $contractTransactions,
        ];

        return view('crm::pages.contract.transaction')->with($dataView);
    }

    public function showTransaction($id)
    {
        // dd($id);
        $contractTransaction = $this->contract->findTransaction($id);
        $dataView = [
            'contractTransaction' => $contractTransaction,
        ];
        // dd($contractTransaction->contract);
        return view('crm::pages.contract.showTransaction')->with($dataView);;
    }

    public function checkTransaction(Request $request, $id)
    {
        //check transaction
        $this->contract->checkTransaction($request->only(['checker_id', 'checker_time', 'is_checked']), $id);

        //check contract
        $this->contract->update($request->only(['is_checked']), $request->contract_id);

        return back();
    }

    public function contractExpired()
    {
        $contracts = $this->contract->expired();
        $dataView  = [
            'contracts' => $contracts,
        ]; 
        return view('crm::pages.contract.expired')->with($dataView);
    }

    public function printContract($id)
    {
        $this->contract->printContract($id);
    }

    public function template()
    {
        $templates = $this->contract->getAllContractTemplate();
        $dataView = [
            'templates' => $templates,
        ];
        return view('crm::pages.contract.template')->with($dataView);
    }

    public function downloadTemplate($id)
    {
        return response()->download(public_path().'/storage/crm/contract/template/template'.$id.'.docx');
    }

    public function addTemplate()
    {
        $companies = Company::all();
        $dataView = [
            'companies' => $companies,
        ];
        return view('crm::pages.contract.addTemplate')->with($dataView);
    }


    public function storeTemplate(Request $request)
    {
        $this->contract->storeTemplate($request->all());
        if( $request->afterSubmit == 'continue') {
            return redirect()->route('get.crm.contract.addTemplate');
        } else {
            return redirect()->route('get.crm.contract.template');
        }
    }
}
