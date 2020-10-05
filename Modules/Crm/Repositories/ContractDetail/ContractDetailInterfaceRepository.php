<?php

namespace Modules\Crm\Repositories\ContractDetail;

use  Modules\Crm\Repositories\BaseInterfaceRepository;

interface ContractDetailInterfaceRepository extends BaseInterfaceRepository
{
    public function getContractListOfProduct($contract_id);

    public function getContractListOfProductNoValue($contract_id);

    public function getContractListOfEmployee($contract_id);
}






?>