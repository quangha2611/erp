<?php

namespace Modules\Assets\Repositories\AssetsManage;

use Modules\Assets\Repositories\BaseInterfaceRepository;


interface AssetsManageInterfaceRepository extends BaseInterfaceRepository
{
   public function filter(array $attributes);
}


?>
