<?php

namespace Modules\Assets\Repositories\AssetsManage;

use App\Company;

use Modules\Assets\Repositories\BaseRepository;
use Modules\Assets\Repositories\BaseInterfaceRepository;
use Modules\Assets\Entities\Asset;
use Modules\Assets\Repositories\AssetsManage\AssetsManageInterfaceRepository;

class AssetsManageRepository extends BaseRepository implements AssetsManageInterfaceRepository
{
    public function getModel()
    {
        return new Asset();
    }

    public function filter(array $attributes)
    {
        $assets =$this->model->query();
        
        if($attributes['companyId'] != null) {
            $assets->where('companyId',$attributes['companyId']);
        }

        if($attributes['id'] != null) {
            $assets->where('id',$attributes['id']);
        }

        if($attributes['author'] != null) {
            $assets->where('author',$attributes['author']);
        }

        if($attributes['name'] != null) {
            $assets->where('name',$attributes['name']);
        }

        if($attributes['categoryId'] != null) {
            $assets->where('categoryId',$attributes['categoryId']);
        }

        dd($assets->get());
    }

    
    
}

?>
