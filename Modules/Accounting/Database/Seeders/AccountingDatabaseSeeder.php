<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class AccountingDatabaseSeeder extends Seeder
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
        $this->call(TransactionStatusTableSeeder::class);
        $this->call(TransactionTypeTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(FundTableSeeder::class);
        $this->call(AccountCategoryTableSeeder::class);
        $this->call(AccountTableSeeder::class);
        $this->call(AccountTypeTableSeeder::class);

    }
}
