<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\Fund;
class FundTableSeeder extends Seeder
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
        Fund::query()->truncate();

        Fund::insert([
            ['id' => 1, 'name' => 'Quỹ 1', 'money' => 100000000, 'author' => 1, 'isDeleted' => 0],
            ['id' => 2, 'name' => 'Quỹ 2', 'money' => 200000000, 'author' => 1, 'isDeleted' => 0],
        ]);
    }
}
