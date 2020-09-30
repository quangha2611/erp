<?php

namespace Modules\Crm\Repositories\ContractDetail;

use Illuminate\Support\Facades\DB;
use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\ContractDetail\ContractDetailInterfaceRepository;
use Modules\Crm\Entities\ContractDetail;

class ContractDetailRepository extends BaseRepository implements ContractDetailInterfaceRepository
{
    public function getModel()
    {
        return new ContractDetail();
    }

    public function getContractTotalValue($contract_id) {
        $products = DB::table('contract_details')->select('contract_id','product_id','amount')
                                     ->where('contract_id', $contract_id)
                                     ->distinct()
                                     ->get();
        $totalValue = 0;
        foreach($products as $product) {
            $totalValue += DB::table('products')->find($product->product_id)->price * $product->amount * (DB::table('products')->find($product->product_id)->vat + 100) / 100;
        }
        return $totalValue;
    }

    public function getContractListOfProduct($contract_id) {
        $products = DB::table('contract_details')->select('contract_id','product_id','amount')
                                     ->where('contract_id', $contract_id)
                                     ->distinct()
                                     ->get();
        $listOfProduct = [];
        foreach($products as $product) {
            array_push($listOfProduct, [
                'id'     => $product->product_id, 
                'name'   => DB::table('products')->find($product->product_id)->name,
                'amount' => $product->amount,
                'vat'    => DB::table('products')->find($product->product_id)->vat,
                'price'  => DB::table('products')->find($product->product_id)->price,
            ]);
        }
        return $listOfProduct;
    }

    public function getContractListOfEmployee($contract_id) {
        $employees = DB::table('contract_details')->where('contract_id', $contract_id)->get();
        $listOfEmployee = [];
        foreach($employees as $employee) {
            array_push($listOfEmployee, [
                'id'      => $employee->employee_id, 
                'name'    => DB::table('users')->find($employee->employee_id)->name,
                'percent' => $employee->percent,
                'product' => [
                    'amount' => $employee->amount,
                    'vat'    => DB::table('products')->find($employee->product_id)->vat,
                    'price'  => DB::table('products')->find($employee->product_id)->price, 
                    'name'   => DB::table('products')->find($employee->product_id)->name, 
                ]
            ]);
        }
        return $listOfEmployee;
    }


    public function store(array $contractDetails)
    {
        foreach($contractDetails as $detail) {
            $this->model->create($detail);
        }
    }

}




?>