<?php

namespace Modules\Crm\Repositories\ContractDetail;

use  Modules\Crm\Repositories\BaseInterfaceRepository;

interface ContractDetailInterfaceRepository extends BaseInterfaceRepository
{
    public function getContractTotalValue($contract_id);

    public function getContractListOfProduct($contract_id);
}






?>