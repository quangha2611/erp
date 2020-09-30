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

        for($i=1; $i<=20; $i++) {
            DB::table('customer_user')->insert([
                ['customer_id' => rand(1,20), 'user_id' => rand(1,3)],
            ]);
        }
    }
}
