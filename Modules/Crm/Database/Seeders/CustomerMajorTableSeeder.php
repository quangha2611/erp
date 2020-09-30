<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\CustomerMajor;

class CustomerMajorTableSeeder extends Seeder
{
    
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        CustomerMajor::query()->truncate();
        for($i=1; $i<=15; $i++) {
            CustomerMajor::insert([
                ['name' => 'Chuyên ngành '.$i,],
            ]);
        }
    }
}
