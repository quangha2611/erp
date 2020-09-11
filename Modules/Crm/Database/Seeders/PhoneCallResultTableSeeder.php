<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\PhoneCallResult;

class PhoneCallResultTableSeeder extends Seeder
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
        PhoneCallResult::query()->truncate();

        PhoneCallResult::insert([
            ['id' => 1, 'name' => 'Khách từ chối' ],
            ['id' => 2, 'name' => 'Khách suy nghĩ - hẹn gặp sau' ],
            ['id' => 3, 'name' => 'Khách suy nghĩ - hẹn gọi lại sau' ],
            ['id' => 4, 'name' => 'Khách có yêu cầu riêng cần trao đổi thêm' ],
            ['id' => 5, 'name' => 'Thành công - Chốt hợp đồng' ],
        ]);

    }
}
