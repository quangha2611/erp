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

        for ($i = 1; $i <= 50; $i++) {
            DB::table('phone_calls')->insert([
                [
                    'title' => 'Cuộc gọi thứ '.$i,
                    'content' => 'Nội dung cuôc gọi thứ '.$i,
                    'direction' => 1,
                    'status_id' => 1,
                    'result_id' => rand(1,5),
                ]
            ]);
        }
    }
}
