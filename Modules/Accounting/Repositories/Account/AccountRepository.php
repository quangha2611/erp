<?php

namespace Modules\Accounting\Repositories\Account;

use Modules\Accounting\Repositories\Account\AccountInterfaceRepository;
use Modules\Accounting\Repositories\BaseRepository;
use Modules\Accounting\Entities\Account;

class AccountRepository extends BaseRepository implements AccountInterfaceRepository
{
    public function getModel()
    {
        return new Account();
    }

    public function index()
    {
        $accounts = $this->model->where('isDeleted',false)->get();

        foreach( $accounts as $account) {
            $account->companyId = $account->company->name;
            $account->type = $account->typeName->name;
            $account->author = $account->user->name;
        }

        return $accounts;
    }

    public function filter(array $attributes)
    {
        $accounts = $this->model->query();

        $accounts->where('isDeleted',false);

        if(isset($attributes['id']) && $attributes['id'] != null) {
            $accounts->where('id',$attributes['id']);
        }

        if(isset($attributes['name']) && $attributes['name'] != null) {
            $accounts->where('name',$attributes['name']);
        }
        
        if(isset($attributes['companyId']) && $attributes['companyId'] != null) {
            $accounts->where('companyId',$attributes['companyId']);
        }

        $data = $accounts->get();

        foreach( $data as $account) {
            $account->companyId = $account->company->name;
            $account->type = $account->typeName->name;
            $account->author = $account->user->name;
        }

        return $data;
    }
}

?>
