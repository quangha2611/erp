<?php

namespace Modules\Crm\Services;

use Modules\Crm\Repositories\Product\ProductInterfaceRepository;

class ProductService
{
    protected $product; 

    public function __construct(ProductInterfaceRepository $product)
    {
        $this->product = $product;
    }

    public function getListProductsByCompany($compamy_id)
    {
        return $this->product = $this->product->getListProductsByCompany($compamy_id);
    }

    public function infoProduct($product_id)
    {
        return $this->product = $this->product->infoProduct($product_id);
    }
}