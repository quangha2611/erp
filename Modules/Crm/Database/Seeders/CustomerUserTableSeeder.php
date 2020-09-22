<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('customer_user')->truncate();

        DB::table('customer_user')->insert([
            ['id' => 1, 'customer_id' => 1, 'user_id' => 1],
            ['id' => 2, 'customer_id' => 1, 'user_id' => 2],
            ['id' => 3, 'customer_id' => 2, 'user_id' => 2],
            ['id' => 4, 'customer_id' => 2, 'user_id' => 3],
            ['id' => 5, 'customer_id' => 3, 'user_id' => 1],
            ['id' => 6, 'customer_id' => 3, 'user_id' => 3],
            ['id' => 7, 'customer_id' => 4, 'user_id' => 1],
            ['id' => 8, 'customer_id' => 4, 'user_id' => 2],
            ['id' => 9, 'customer_id' => 4, 'user_id' => 3],
        ]);
    }
}
