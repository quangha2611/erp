<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\ContractTransaction;

class ContractTransactionTableSeeder extends Seeder
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
        ContractTransaction::query()->truncate();
        ContractTransaction::insert([
            ['contract_id' => 1, 'type_id' => rand(0,1), 'author' => 1, 'status' => 1, 'description' => 'Phiếu thu số  1'],
        ]);
    }
}
