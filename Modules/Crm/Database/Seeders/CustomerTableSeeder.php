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
            ['id' => 1, 'name' => 'Khách hàng 1', 'phone' => '12345678', 'email' => 'khach1@gmail.com', 'company_id' => 1, 'website' => 'khach1.com', 'major' => 'IT','type_id' => 1 ,'level_id' => 8],
            ['id' => 2, 'name' => 'Khách hàng 2', 'phone' => '87654321', 'email' => 'khach2@gmail.com', 'company_id' => 2, 'website' => 'khach2.com', 'major' => 'Kinh doanh','type_id' => 1 ,'level_id' => 5],
            ['id' => 3, 'name' => 'Khách hàng 3', 'phone' => '07941395', 'email' => 'khach3@gmail.com', 'company_id' => 3, 'website' => 'khach3.com', 'major' => 'Sale','type_id' => 1 ,'level_id' => 6],
            ['id' => 4, 'name' => 'Khách hàng 4', 'phone' => '03880673', 'email' => 'khach4@gmail.com', 'company_id' => 4, 'website' => 'khach4.com', 'major' => 'IT','type_id' => 1 ,'level_id' => 7],
        ]);
    }
}
