<?php

namespace Modules\Crm\Repositories\Contract;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Entities\Contract;

class ContractRepository extends BaseRepository implements ContractInterfaceRepository
{
    public function getModel()
    {
        return new Contract();
    }

    public function store(array $attributes)
    {
        $newContract = $this->model->create($attributes);
        return $newContract;
    }

    public function updateContractExpried()
    {
        $today = date("Y-m-d");
        $this->model->where('expired_date','<',$today)->update(['is_deleted' => 1]);
        return true;
    }

    public function expired()
    {
        $contracts = $this->model->where('is_deleted',false)->orderBy('expired_date', 'desc')->get();
        return $contracts;
    }

    public function filter(array $attributes)
    {
        $contracts = $this->model->query();

        if (isset($attributes['customer_id']) && $attributes['customer_id'] != NULL) {
            $contracts->where('customer_id', $attributes['customer_id']);
        }

        if (isset($attributes['company_id']) && $attributes['company_id'] != NULL){
            $contracts->where('company_id',$attributes['company_id']);
        }

        if (isset($attributes['contract_type']) && $attributes['contract_type'] != NULL){
            $contracts->where('contract_type',$attributes['contract_type']);
        }

        if (isset($attributes['sign_type']) && $attributes['sign_type'] != NULL){
            $contracts->where('sign_type',$attributes['sign_type']);
        }

        if (isset($attributes['end_date']) && $attributes['end_date'] != NULL){
            $contracts->where('end_date',$attributes['end_date']);
        }

        if (isset($attributes['start_date']) && $attributes['start_date'] != NULL){
            $contracts->where('start_date',$attributes['start_date']);
        }

        if (isset($attributes['checker_time']) && $attributes['checker_time'] != NULL){
            $contracts->where('checker_time',$attributes['checker_time']);
        }
        
        if (isset($attributes['created_at']) && $attributes['created_at'] != NULL){
            $contracts->where('created_at', '>', $attributes['created_at']);
        }
        
        if (isset($attributes['expired_date']) && $attributes['expired_date'] != NULL){
            $contracts->where('expired_date', $attributes['expired_date']);
        }

        if (isset($attributes['contract_id']) && $attributes['contract_id'] != NULL){
            $contracts->where('id', $attributes['contract_id']);
        }

        return $contracts->get();
    }
}




?>