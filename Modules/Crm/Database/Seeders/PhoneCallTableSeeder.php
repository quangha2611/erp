<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Modules\Crm\Entities\PhoneCall;

class PhoneCallTableSeeder extends Seeder
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
        DB::table('phone_calls')->truncate();

        for ($i = 1; $i <= 200; $i++) {
            DB::table('phone_calls')->insert([
                [
                    'title' => 'Cuộc gọi thứ '.$i,
                    'content' => 'Nội dung cuôc gọi thứ '.$i,
                    'direction' => 1,
                    'status_id' => rand(1,2),
                    'created_at' => '2020-'.rand(1,12).'-'.rand(1,29).' '.rand(1,23).':'.rand(0,59).':'.rand(0,59),
                    'result_id' => rand(1,5),
                ]
            ]);
        }
    }
}
