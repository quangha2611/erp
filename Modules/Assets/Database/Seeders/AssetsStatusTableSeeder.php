<?php

namespace Modules\Assets\Database\Seeders;;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Modules\Assets\Entities\AssetStatus;

class AssetsStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        AssetStatus::query()->truncate();

        // $this->call("OthersTableSeeder");
        AssetStatus::insert([
            ['id'=>1, 'name'=>'Tình trạng 1'],
            ['id'=>2, 'name'=>'Tình trạng 2'],
            ['id'=>3, 'name'=>'Tình trạng 3'],
        ]);
        
    }
}
