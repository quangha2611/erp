<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\CustomerStatus;

class CustomerStatusTableSeeder extends Seeder
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
        CustomerStatus::query()->truncate();

        CustomerStatus::insert([
            ['id' => 1, 'name' => 'Trạng thái 1'],
            ['id' => 2, 'name' => 'Trạng thái 2'],
            ['id' => 3, 'name' => 'Trạng thái 3'],
            ['id' => 4, 'name' => 'Trạng thái 4'],
        ]);
    }
}
