<?php

namespace Modules\Accounting\Services\Account;

use Illuminate\Http\Request;

use Modules\Accounting\Repositories\Account\AccountRepository;

class AccountService
{
    protected $account;

    public function __construct(AccountRepository $accountRepository)
    {
        $this->account = $accountRepository;
    }

    public function index()
    {
        return $this->account->index();
    }

    public function find($id)
    {
        return $this->account->find($id);
    }

    public function filter(Request $request)
    {
        return $this->account->filter($request->all());
    }

    public function store(Request $request)
    {   
        $this->account->store($request->all());
    }

    public function update(Request $request)
    {
        $this->account->update($request->id,$request->all());
    }

    public function destroy($id)
    {
        $this->account->destroy($id);
    }

}


?>
