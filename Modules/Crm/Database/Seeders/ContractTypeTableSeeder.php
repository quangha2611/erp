<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\ContractType;

class ContractTypeTableSeeder extends Seeder
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
        ContractType::query()->truncate();

        for ($i=1; $i<=10; $i++) {
            ContractType::insert([
                ['name' => 'Loại hợp đồng '.$i],
            ]);
        }
    }
}
