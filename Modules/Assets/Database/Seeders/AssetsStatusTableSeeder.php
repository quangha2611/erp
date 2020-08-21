<?php

namespace Modules\Assets\Database\Seeders;;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AssetsStatusTableSeeder extends Seeder
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

        DB::table('asset_statuses')->insert([
            [
                'name' => 'Tình trạng 1'
            ], 
            [
                'name' => 'Tình trạng 2'
            ],
            [
                'name' => 'Tình trạng 3'
            ],    
        ]);
    }
}
