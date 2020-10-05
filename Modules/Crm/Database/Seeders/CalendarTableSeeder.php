<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\Calendar;

class CalendarTableSeeder extends Seeder
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
        Calendar::query()->truncate();

        for ($i=1; $i<=50; $i++) {
            Calendar::create([
                'company_id' => rand(1,7),
                'title' => 'Tiêu đề lịch hẹn '.$i,
                'begin_date_time' => '2020-'.rand(1,12).'-'.rand(1,29).' '.rand(1,23).':'.rand(0,59).':'.rand(0,59),
                'location' => 'Đại điểm '.$i,
                'description' => 'Miêu tả cuộc gặp '.$i,
            ]);
        }
    }
}
