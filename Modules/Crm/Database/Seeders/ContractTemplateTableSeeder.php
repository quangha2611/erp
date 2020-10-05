<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\ContractTemplate;
use Modules\Crm\Entities\ContractType;

class ContractTemplateTableSeeder extends Seeder
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
        ContractTemplate::query()->truncate();
        for($i=1; $i<=10; $i++) {
            ContractTemplate::insert([
                'name' => 'template'.$i, 'company_id' => rand(1,7), 'contract_type_id' => $i,
            ]);
        }
    }
}
