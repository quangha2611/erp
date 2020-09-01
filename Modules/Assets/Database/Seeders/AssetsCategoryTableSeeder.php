<?php

namespace Modules\Assets\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Assets\Entities\AssetCategory;

class AssetsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        AssetCategory::query()->truncate();

        AssetCategory::insert([
            ['id'=>1, 'companyId'=>1, 'name'=>'Danh mục 1', 'parentId'=>null, 'code'=>'dm1', 'author'=>1, 'isDeleted'=>false],
            ['id'=>2, 'companyId'=>2, 'name'=>'Danh mục 2', 'parentId'=>null, 'code'=>'dm2', 'author'=>1, 'isDeleted'=>false],
            ['id'=>3, 'companyId'=>3, 'name'=>'Danh mục 3', 'parentId'=>null, 'code'=>'dm3', 'author'=>1, 'isDeleted'=>false],
            ['id'=>4, 'companyId'=>1, 'name'=>'Danh mục 1.1', 'parentId'=>1, 'code'=>'dm1.1', 'author'=>1, 'isDeleted'=>false],
            ['id'=>5, 'companyId'=>2, 'name'=>'Danh mục 2.1', 'parentId'=>2, 'code'=>'dm2.1', 'author'=>1, 'isDeleted'=>false],
            ['id'=>6, 'companyId'=>2, 'name'=>'Danh mục 2.1.1', 'parentId'=>5, 'code'=>'dm2.1.1', 'author'=>1, 'isDeleted'=>false],

        ]);        
    }
}
