<?php

namespace Modules\Crm\Repositories\Product;

use Modules\Crm\Repositories\BaseRepository;
use Modules\Crm\Repositories\Product\ProductInterfaceRepository;
use Modules\Crm\Entities\Product;

class ProductRepository extends BaseRepository implements ProductInterfaceRepository
{
    public function getModel()
    {
        return new Product();
    }

    public function getListProductsByCompany($company_id)
    {
        $products = $this->model->where('is_deleted',0)
                                ->where('company_id', $company_id)->get();        
        return $products;
    }

    public function infoProduct($product_id)
    {
        $product = $this->model->find($product_id);
        return $product;
    }
}




?>