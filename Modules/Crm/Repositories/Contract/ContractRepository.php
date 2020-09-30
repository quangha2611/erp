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
}




?>