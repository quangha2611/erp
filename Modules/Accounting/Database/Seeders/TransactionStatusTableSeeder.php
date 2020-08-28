<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\TransactionStatus;

class TransactionStatusTableSeeder extends Seeder
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
        TransactionStatus::query()->truncate();

        TransactionStatus::insert([
            ['id' => 1, 'name' => 'Mới'],
            ['id' => 2, 'name' => 'Đã duyệt'],
            ['id' => 3, 'name' => 'Đã hạch toán'],
            ['id' => 4, 'name' => 'Đã xác nhận'],
        ]);
    }
}
