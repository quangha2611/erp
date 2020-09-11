<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\CustomerType;

class CustomerTypeTableSeeder extends Seeder
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
        CustomerType::query()->truncate();

        CustomerType::insert([
            ['id' => 1, 'name' => 'Cá nhân'],
            ['id' => 2, 'name' => 'Công ty'],
        ]);
    }
}
