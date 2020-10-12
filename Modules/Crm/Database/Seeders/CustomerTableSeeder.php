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

        $cities = ["Tiền Giang", "Hưng Yên", "Hà Nội", "TP Hồ Chí Minh", "Cà Mau", "Đắc Lắc", "Nam Định", "Quảng Ninh", "Đắk Nông", "Đà Nẵng", "Hải Dương", "Long An", "Bến Tre", "Đồng Tháp", "Vĩnh Long", "Kiên Giang", "Trà Vinh", "Sóc Trăng", "Bắc Ninh", "Thanh Hoá", "Vũng Tàu", "Đồng Nai", "Bình Dương", "Thái Nguyên", "Thái Bình", "Cần Thơ", "Nghệ An", "Huế", "Bình Phước", "Quảng Nam", "Quảng Ngãi", "Ninh Thuận", "Lào Cai", "Hải Phòng", "An Giang", "Phú Thọ", "Tây Ninh", "Khánh Hòa", "Phú Yên", "Hòa Bình", "Tuyên Quang", "Lai Châu", "Hậu Giang", "Lâm Đồng", "Lạng Sơn", "Hà Nam", "Bắc Cạn", "Bình Định", "Cao Bằng", "Sơn La", "Quảng Bình", "Quảng Trị", "Gia Lai", "Bắc Giang", "Hà Tĩnh", "Ninh Bình", "Bình Thuận", "Kon Tum", "Vĩnh Phúc", "Bạc Liêu", "Yên Bái", "Điện Biên", "Hà Giang"];

        for($i=1; $i<=20; $i++) {
            Customer::insert([
                [
                    'name' => 'Khách hàng '.$i,
                    'phone' => rand(100000, 999999),
                    'email' => 'khach'.$i.'@gmail.com',
                    'city_id' => $cities[rand(0,62)],
                    'major_id' => rand(1,15),
                    'source_id' => rand(1,10),
                    'type_id' => 1 ,
                    'level_id' => rand(1,9),
                    'is_account' => rand(0,1),
                    'customer_status' => rand(1,4),
                    'address' => 'Hải Phòng',
                    'author' => 1,
                    'created_at' => '2020-'.rand(9,10).'-'.rand(1,29).' '.rand(1,23).':'.rand(0,59).':'.rand(0,59),
                    'updated_at' => '2020-'.rand(9,10).'-'.rand(1,29).' '.rand(1,23).':'.rand(0,59).':'.rand(0,59),
                    'identification' => '0000000000'.$i],
            ]);
        }
    }
}
