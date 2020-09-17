<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\CustomerSource;

class CustomerSourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        CustomerSource::query()->truncate();

        // $this->call("OthersTableSeeder");
        CustomerSource::insert([
            ['id' => 1, 'name' => 'Nguồn thông tin 1'],
            ['id' => 2, 'name' => 'Nguồn thông tin 2'],
            ['id' => 3, 'name' => 'Nguồn thông tin 3'],
            ['id' => 4, 'name' => 'Nguồn thông tin 4'],
        ]);
    }
}
