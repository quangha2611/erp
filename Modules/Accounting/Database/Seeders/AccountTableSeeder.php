<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\Account;


class AccountTableSeeder extends Seeder
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
        Account::query()->truncate();

        Account::insert([
            ['companyId'=>1, 'name'=>'Tài khoản 1', 'categoryId' => '1', 'code' => 'tk01', 'type' => '1', 'author' => 1],
            ['companyId'=>2, 'name'=>'Tài khoản 2', 'categoryId' => '2', 'code' => 'tk03', 'type' => '2', 'author' => 1],
            ['companyId'=>3, 'name'=>'Tài khoản 3', 'categoryId' => '3', 'code' => 'tk04', 'type' => '1', 'author' => 1],
            ['companyId'=>4, 'name'=>'Tài khoản 4', 'categoryId' => '4', 'code' => 'tk05', 'type' => '2', 'author' => 1],
        ]);
    }
}
