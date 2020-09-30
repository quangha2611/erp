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
}




?>