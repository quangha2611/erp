<?php

namespace Modules\Crm\Repositories\ContractTransaction;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\ContractTransaction\ContractTransactionInterfaceRepository;
use Modules\Crm\Entities\ContractTransaction;

class ContractTransactionRepository extends BaseRepository implements ContractTransactionInterfaceRepository
{
    public function getModel()
    {
        return new ContractTransaction();
    }


}




?>