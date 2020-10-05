<?php

namespace Modules\Crm\Services;

use Illuminate\Support\Facades\Storage;
use Modules\Crm\Repositories\Contract\ContractInterfaceRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailInterfaceRepository;
use Modules\Crm\Repositories\ContractTransaction\ContractTransactionInterfaceRepository;
use Modules\Crm\Repositories\Customer\CustomerInterfaceRepository;
use Modules\Crm\Repositories\Template\TemplateInterfaceRepository;
use PhpOffice\PhpWord\TemplateProcessor;

class ContractService
{
    protected $contract, $contractDetail, $contractTransaction, $template, $customer;

    public function __construct(ContractInterfaceRepository $contract,
                                ContractDetailInterfaceRepository $contractDetail,
                                ContractTransactionInterfaceRepository $contractTransaction,
                                TemplateInterfaceRepository $template,
                                CustomerInterfaceRepository $customer)
    {
        $this->contract            = $contract;
        $this->contractDetail      = $contractDetail;
        $this->contractTransaction = $contractTransaction;
        $this->template            = $template;
        $this->customer            = $customer;
    }

    public function all()
    {
        $contracts = $this->contract->all();

        // get list of product
        foreach($contracts as $contract) {
            $contract['listOfProduct'] = $this->contractDetail->getContractListOfProductNoValue($contract->id);
        }

        return $contracts;
    }

    public function filter(array $attributes)
    {
        if (isset($attributes['info_customer']) && $attributes['info_customer'] != NULL) {
            $customer = $this->customer->findByInfo(['info_customer' => $attributes['info_customer']]);
            if($customer != NULL) {
                $attributes['customer_id'] = $customer->id;
            } else {
                $attributes['customer_id'] = 0;
            }
        }
        $contracts = $this->contract->filter($attributes);
        foreach($contracts as $contract) {
            $contract['listOfProduct'] = $this->contractDetail->getContractListOfProductNoValue($contract->id);
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
                        'product_name'=> $attributes['product_name'][$i],
                        'amount'      => $attributes['contract_product_amount'][$i] + 0,
                        'employee_id' => str_replace("x", "", $attributes['employee_product_employee'][$j]) + 0,
                        'employee_name' => $attributes['employee_name'][$i],
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
            $contractTransaction->contract['totalValue']     = $contractTransaction->contract->total_value;
        }
        return $contractTransactions;
    }

    public function findTransaction($id)
    {
        $contractTransaction = $this->contractTransaction->find($id);

        $contractTransaction->contract['listOfProduct']  = $this->contractDetail->getContractListOfProduct($contractTransaction->contract->id);
        $contractTransaction->contract['listOfEmployee'] = $this->contractDetail->getContractListOfEmployee($contractTransaction->contract->id);
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
        $this->contract->updateContractExpried();
    }

    public function printContract($id)
    {
        //get contract
        $contract = $this->contract->find($id);

        //insert data
        $templateProcessor = new TemplateProcessor('storage/crm/contract/template/template'.$contract->type->template->id.'.docx');

        $templateProcessor->setValues(
            [
                'data' => 'Data from contract'.$id,
            ]
        );
        //download contract 
        $templateProcessor->saveAs('storage/crm/contract/download/contract'.$id.'.docx');

    }

    public function expired()
    {
        return $this->contract->expired();
    }

    public function getAllContractTemplate()
    {
        return $this->template->all();
    }

    public function storeTemplate(array $attributes)
    {
        return $this->template->store($attributes);
    }


}
