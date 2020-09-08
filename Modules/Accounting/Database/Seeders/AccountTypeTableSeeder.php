<?php

namespace Modules\Accounting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Accounting\Entities\AccountType;

class AccountTypeTableSeeder extends Seeder
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
        AccountType::query()->truncate();

        AccountType::insert([
            ['id' => 1, 'name' => 'Lọai 1'],
            ['id' => 2, 'name' => 'Loại 2']
        ]);
    }
}
