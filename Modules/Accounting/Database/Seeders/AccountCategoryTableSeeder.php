<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\AccountCategory;


class AccountCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        AccountCategory::query()->truncate();

        AccountCategory::insert([
            ['id' => 1, 'companyId' => 1, 'name' => 'Khoản mục 1', 'parentId' => null, 'code' => 'km01', 'author' => 1, 'isDeleted' => 0],
            ['id' => 2, 'companyId' => 2, 'name' => 'Khoản mục 2', 'parentId' => null, 'code' => 'km02', 'author' => 1, 'isDeleted' => 0],
            ['id' => 3, 'companyId' => 1, 'name' => 'Khoản mục 1.1', 'parentId' => 1, 'code' => 'km101', 'author' => 1, 'isDeleted' => 0],
            ['id' => 4, 'companyId' => 3, 'name' => 'Khoản mục 2.1', 'parentId' => 2, 'code' => 'km201', 'author' => 1, 'isDeleted' => 0],
            ['id' => 5, 'companyId' => 4, 'name' => 'Khoản mục 1.1.1', 'parentId' => 3, 'code' => 'km10101', 'author' => 1, 'isDeleted' => 0],
            ['id' => 6, 'companyId' => 5, 'name' => 'Khoản mục 3', 'parentId' => null, 'code' => 'km03', 'author' => 1, 'isDeleted' => 0],
        ]);
    }
}
