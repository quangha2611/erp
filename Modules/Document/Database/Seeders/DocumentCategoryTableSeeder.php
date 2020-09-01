<?php

namespace Modules\Document\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Document\Entities\DocumentCategory;

class DocumentCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        DocumentCategory::query()->truncate();


        // $this->call("OthersTableSeeder");
        DocumentCategory::insert([
            ['id'=>1, 'companyId'=>1, 'departmentId'=>1, 'parentId'=>null, 'name'=>'Danh mục tài liệu 1'],
            ['id'=>2, 'companyId'=>2, 'departmentId'=>1, 'parentId'=>null, 'name'=>'Danh mục tài liệu 2'],
            ['id'=>3, 'companyId'=>3, 'departmentId'=>1, 'parentId'=>null, 'name'=>'Danh mục tài liệu 3'],
            ['id'=>4, 'companyId'=>4, 'departmentId'=>1, 'parentId'=>1, 'name'=>'Danh mục tài liệu 1.1'],
            ['id'=>5, 'companyId'=>5, 'departmentId'=>1, 'parentId'=>2, 'name'=>'Danh mục tài liệu 2.1'],
            ['id'=>6, 'companyId'=>6, 'departmentId'=>1, 'parentId'=>5, 'name'=>'Danh mục tài liệu 2.1.1'],
        ]);
    }
}
