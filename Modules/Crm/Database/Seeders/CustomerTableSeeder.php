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

        for($i=1; $i<=20; $i++) {
            Customer::insert([
                ['name' => 'Khách hàng '.$i, 'phone' => rand(100000, 999999), 'email' => 'khach'.$i.'@gmail.com', 'city_id' => rand(1,63), 'major_id' => rand(1,15), 'source_id' => rand(1,10), 'type_id' => 1 ,'level_id' => rand(1,9), 'is_account' => 1, 'customer_status' => rand(1,4), 'address' => 'Hải Phòng', 'author' => 1, 'identification' => '0000000000'.$i],
            ]);
        }
    }
}
