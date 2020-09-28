<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailInterfaceRepository;

class ContractService
{
    protected $contract, $contractDetail; 

    public function __construct(ContractInterfaceRepository $contract,
                                ContractDetailInterfaceRepository $contractDetail)
    {
        $this->contract       = $contract;
        $this->contractDetail = $contractDetail;
    }

    public function all()
    {
        $contracts = $this->contract->all();
        // get total value 
        foreach($contracts as $contract) {
            $contract['totalValue'] = $this->contractDetail->getContractTotalValue($contract->id);
        }
        // get list of product
        foreach($contracts as $contract) {
            $contract['listOfProduct'] = $this->contractDetail->getContractListOfProduct($contract->id);
        }

        return $contracts;
    }

    public function find($id)
    {
        $contract = $this->contract->find($id);
        $contract['listOfProduct'] = $this->contractDetail->getContractListOfProduct($contract->id);
        $contract['listOfEmployee'] = $this->contractDetail->getContractListOfEmployee($contract->id);
        return $contract;
    }

    public function store(array $attributes)
    {   
        //store new contract
        $newContract = $this->contract->store($attributes);

        $contractDetails = [];
        for($i = 0; $i < count($attributes['contract_product']); $i++) {
            for($j = 0; $j < count($attributes['employee_product_employee']); $j++) {
                if ($attributes['employee_product_product'][$j] == $attributes['contract_product'][$i]) {
                    array_push($contractDetails, [
                        'contract_id' => $newContract->id,
                        'product_id'  => $attributes['contract_product'][$i] + 0, 
                        'amount'      => $attributes['contract_product_amount'][$i] + 0,
                        'employee_id' => str_replace("x", "", $attributes['employee_product_employee'][$j]) + 0,
                        'percent'     => $attributes['employee_product_percent'][$j] + 0,
                    ]);
                }
            }
        }

        $this->contractDetail->store($contractDetails);

    }


}