<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\Customer;

class CustomerTableSeeder extends Seeder
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
        Customer::query()->truncate();

        Customer::insert([
            ['id' => 1, 'name' => 'Khách hàng 1', 'phone' => '12345678', 'email' => 'khach1@gmail.com', 'major_id' => 1, 'source_id' => 1,'type_id' => 1 ,'level_id' => 8],
            ['id' => 2, 'name' => 'Khách hàng 2', 'phone' => '87654321', 'email' => 'khach2@gmail.com', 'major_id' => 2, 'source_id' => 2,'type_id' => 1 ,'level_id' => 5],
            ['id' => 3, 'name' => 'Khách hàng 3', 'phone' => '07941395', 'email' => 'khach3@gmail.com', 'major_id' => 2, 'source_id' => 3,'type_id' => 1 ,'level_id' => 6],
            ['id' => 4, 'name' => 'Khách hàng 4', 'phone' => '03880673', 'email' => 'khach4@gmail.com', 'major_id' => 1, 'source_id' => 1,'type_id' => 1 ,'level_id' => 7],
        ]);
    }
}
