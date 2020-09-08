<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\Transaction;


class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Transaction::query()->truncate();

        Transaction::insert([
            ['id'=>1,'companyId'=>1,'departmentId'=>388,'applyDate'=>'2020-09-03','accountId'=>1,'expenseCategoryId'=>1,'amount'=>1000000,'link'=>'link1.com','status'=>1,'description'=>'','type'=>1,'author'=>1,'isDeleted'=>0],
            ['id'=>2,'companyId'=>1,'departmentId'=>940,'applyDate'=>'2020-09-07','accountId'=>2,'expenseCategoryId'=>2,'amount'=>2000000,'link'=>'link2.com','status'=>1,'description'=>'','type'=>2,'author'=>1,'isDeleted'=>0],
            ['id'=>3,'companyId'=>2,'departmentId'=>388,'applyDate'=>'2020-09-13','accountId'=>1,'expenseCategoryId'=>3,'amount'=>5000000,'link'=>'link3.com','status'=>1,'description'=>'','type'=>1,'author'=>1,'isDeleted'=>0],
            ['id'=>4,'companyId'=>3,'departmentId'=>940,'applyDate'=>'2020-09-20','accountId'=>2,'expenseCategoryId'=>4,'amount'=>4000000,'link'=>'link4.com','status'=>1,'description'=>'','type'=>2,'author'=>1,'isDeleted'=>0],
            ['id'=>5,'companyId'=>3,'departmentId'=>940,'applyDate'=>'2020-09-20','accountId'=>1,'expenseCategoryId'=>4,'amount'=>4000000,'link'=>'link4.com','status'=>1,'description'=>'','type'=>2,'author'=>1,'isDeleted'=>0],
        ]);
    }
}
