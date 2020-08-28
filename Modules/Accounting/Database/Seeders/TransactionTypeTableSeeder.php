<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\TransactionType;

class TransactionTypeTableSeeder extends Seeder
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
        TransactionType::query()->truncate();

        TransactionType::insert([
            ['id' => 1, 'name' => 'Phiếu chi'],
            ['id' => 2, 'name' => 'Phiếu thu'],
        ]);
    }
}
