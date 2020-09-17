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

        CustomerMajor::insert([
            ['id' => 1, 'name' => 'Chuyên ngành 1',],
            ['id' => 2, 'name' => 'Chuyên ngành 2',],
            ['id' => 3, 'name' => 'Chuyên ngành 3',],
            ['id' => 4, 'name' => 'Chuyên ngành 4',],
        ]);
    }
}
