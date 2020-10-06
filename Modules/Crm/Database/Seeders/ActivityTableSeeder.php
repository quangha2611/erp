<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ActivityTableSeeder extends Seeder
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
        DB::table('activities')->truncate();

        for ($i = 1; $i <= 200; $i++) {
            DB::table('activities')->insert([
                [
                    'title' => 'Hành động '.$i,
                    'action_id' => rand(1,7),
                    'content' => 'Nội dung hành động '.$i ,
                    'calendar_id' => $i,
                    'phone_call_id' => $i,
                    'request_call_id' => $i,
                    'customer_id' => rand(1,20),
                    'author' => rand(1,3),
                ]
            ]);
        }
    }
}
