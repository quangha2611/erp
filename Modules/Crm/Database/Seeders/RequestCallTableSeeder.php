<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\RequestCall;

class RequestCallTableSeeder extends Seeder
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
        RequestCall::query()->truncate();

        for ($i = 1; $i <= 500; $i++) {
            RequestCall::create([
                'request_time_call' => '2020-' . rand(1, 12) . '-' . rand(1, 29) . ' ' . rand(1, 23) . ':' . rand(0, 59) . ':' . rand(0, 59),
                'tele_sale_id' => rand(1, 3),
            ]);
        }
    }
}
