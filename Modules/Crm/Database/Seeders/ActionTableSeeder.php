<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\Action;


class ActionTableSeeder extends Seeder
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
        Action::query()->truncate();

        Action::insert([
            ['id' => 1, 'name' => 'Thêm cuộc gặp'],
            ['id' => 2, 'name' => 'Thêm cuộc gọi'],
            ['id' => 3, 'name' => 'Đặt lịch'], 
            ['id' => 4, 'name' => 'Yêu cầu gọi'], 
            ['id' => 5, 'name' => 'Tạo hợp đồng'],
            ['id' => 6, 'name' => 'Thêm triển khai'],
            ['id' => 7, 'name' => 'Thêm yêu cầu'],
        ]);
    }
}
