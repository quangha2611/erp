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
            $totalValue += DB::table('products')->find($product->product_id)->price * $product->amount;
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
            array_push($listOfProduct, DB::table('products')->find($product->product_id)->name);
        }
        return $listOfProduct;
    }


    public function store(array $contractDetails)
    {
        foreach($contractDetails as $detail) {
            $this->model->create($detail);
        }
    }

}




?>