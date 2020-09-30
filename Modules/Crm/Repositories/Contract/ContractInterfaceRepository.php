<?php

namespace Modules\Crm\Repositories\Contract;

use  Modules\Crm\Repositories\BaseInterfaceRepository;

interface ContractInterfaceRepository extends BaseInterfaceRepository
{
    public function updateContractExpried();

    public function expired();
}






?>