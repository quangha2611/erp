<?php

namespace Modules\Accounting\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Modules\Accounting\Services\Account\AccountService;

use App\Company;
use Modules\Accounting\Entities\AccountType;

class AccountController extends Controller
{
    protected $account;
    
    public function __construct (AccountService $accountService)
    {
        $this->account = $accountService;
    }

    public function index()
    {
        $companies = Company::all();

        $accounts = $this->account->index();
        return view('accounting::pages.account.index',compact('accounts','companies'));
    }

    public function filter(Request $request)
    {
        $companies = Company::all();

        $accounts = $this->account->filter($request);
        return view('accounting::pages.account.index',compact('accounts','companies'));
    }

    
    public function create()
    {
        $companies = Company::all();
        $types = AccountType::all();
        return view('accounting::pages.account.create',compact('companies','types'));
    }

    
    public function store(Request $request)
    {
        $this->account->store($request);

        if($request->afterSubmit == "show") {
            return redirect()->route('get.accounting.account.index');
        } else {
            return redirect()->route('get.accounting.account.create');
        }
    }


    public function show($id)
    {
        return view('accounting::show');
    }

    
    public function edit($id)
    {
        $companies = Company::all();
        $types = AccountType::all();

        $currentAccount = $this->account->find($id);
        return view('accounting::pages.account.edit',compact('companies','types','currentAccount'));
    }

    
    public function update(Request $request)
    {
        $currentAccount = $this->account->update($request);
        return redirect()->route('get.accounting.account.index');
    }

    
    public function destroy(Request $request)
    {
        $this->account->destroy($request->id);
    }
}
