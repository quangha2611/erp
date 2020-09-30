<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\ContractSignType;

class ContractSignTypeTableSeeder extends Seeder
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
        ContractSignType::query()->truncate();
        
        ContractSignType::insert([
            ['name' => 'Ký mới'],
            ['name' => 'Tái ký'],
            ['name' => 'Mở rộng'],
            ['name' => 'Bản chéo'],
        ]);
    }
}
