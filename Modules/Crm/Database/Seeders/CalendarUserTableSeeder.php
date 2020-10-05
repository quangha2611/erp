<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CalendarUserTableSeeder extends Seeder
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
        DB::table('calendar_user')->truncate();

        for ($i = 1; $i <= 150; $i++) {
            DB::table('calendar_user')->insert([
                'calendar_id' => $i <= 50 ? $i : ($i <= 100 ? $i-50 : $i - 100),
                'user_id' => rand(1,3),
            ]);
        }
    }
}
