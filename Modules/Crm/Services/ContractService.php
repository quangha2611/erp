<?php

namespace Modules\Crm\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailInterfaceRepository;
use Modules\Crm\Repositories\ContractTransaction\ContractTransactionInterfaceRepository;
use PhpOffice\PhpWord\TemplateProcessor;

class ContractService
{
    protected $contract, $contractDetail, $contractTransaction; 

    public function __construct(ContractInterfaceRepository $contract,
                                ContractDetailInterfaceRepository $contractDetail,
                                ContractTransactionInterfaceRepository $contractTransaction)
    {
        $this->contract            = $contract;
        $this->contractDetail      = $contractDetail;
        $this->contractTransaction = $contractTransaction;
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


    public function getAllTransaction()
    {
        $contractTransactions = $this->contractTransaction->all();
        foreach( $contractTransactions as $contractTransaction ) {
            // $contractTransaction->contract['listOfProduct']  = $this->contractDetail->getContractListOfProduct($contractTransaction->contract->id);
            // $contractTransaction->contract['listOfEmployee'] = $this->contractDetail->getContractListOfEmployee($contractTransaction->contract->id);
            $contractTransaction->contract['totalValue']     = $this->contractDetail->getContractTotalValue($contractTransaction->contract->id);

        }
        return $contractTransactions;
    }

    public function findTransaction($id)
    {
        $contractTransaction = $this->contractTransaction->find($id);

        $contractTransaction->contract['listOfProduct']  = $this->contractDetail->getContractListOfProduct($contractTransaction->contract->id);
        $contractTransaction->contract['listOfEmployee'] = $this->contractDetail->getContractListOfEmployee($contractTransaction->contract->id);
        $contractTransaction->contract['totalValue']     = $this->contractDetail->getContractTotalValue($contractTransaction->contract->id);
        return $contractTransaction;
    }

    public function checkTransaction(array $attributes, $id)
    {
        $this->contractTransaction->update($attributes, $id);
    }

    public function update(array $attributes, $id)
    {
        $this->contract->update($attributes, $id);
    }

    public function updateContractExpried()
    {
        // $this->contract->updateContractExpried();
    }

    public function printContract($id)
    {
        $templateProcessor = new TemplateProcessor('storage/crm/template/contract.docx');

        $templateProcessor->setValues(
            [
                'test' => 'alo',
            ]
        );

        $templateProcessor->saveAs('storage/crm/template/contract'.$id.'.docx');

    }

}
