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
            for ($j=1; $j<=3; $j++) {
                DB::table('customer_user')->insert([
                    ['customer_id' => $i, 'user_id' => rand(1, 3)],
                ]);
            }
        }
    }
}
