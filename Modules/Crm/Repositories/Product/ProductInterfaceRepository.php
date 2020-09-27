<?php

namespace Modules\Crm\Repositories\Product;

use  Modules\Crm\Repositories\BaseInterfaceRepository;

interface ProductInterfaceRepository extends BaseInterfaceRepository
{
    public function getListProductsByCompany($company_id);

    public function infoProduct($product_id);
}






?>