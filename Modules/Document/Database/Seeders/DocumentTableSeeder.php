<?php

namespace Modules\Document\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Document\Entities\Document;

class DocumentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Document::query()->truncate();

        // $this->call("OthersTableSeeder");
        Document::insert([
            ['id'=>1, 'companyId'=>1, 'departmentId'=>1, 'categoryId'=>1, 'name'=>'Tài liệu 1', 'content'=>null, 'author'=>1, 'isDeleted'=>false],
            ['id'=>2, 'companyId'=>2, 'departmentId'=>1, 'categoryId'=>2, 'name'=>'Tài liệu 2', 'content'=>null, 'author'=>1, 'isDeleted'=>false],
            ['id'=>3, 'companyId'=>3, 'departmentId'=>1, 'categoryId'=>3, 'name'=>'Tài liệu 3', 'content'=>null, 'author'=>1, 'isDeleted'=>false],
        ]);

    }
}
