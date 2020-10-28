<?php

namespace Modules\Crm\Repositories\Contract;

use  Modules\Crm\Repositories\BaseInterfaceRepository;

interface ContractInterfaceRepository extends BaseInterfaceRepository
{
    public function updateContractExpried();

    public function expired();

    public function expiredWithAll();

    public function countContractInRangeTime($startDate, $endDate);

    public function getContractIsCheckedWithCustomer();

    public function getAllContractWithCustomer();

    public function getAllContractWithDetail();
}






?>