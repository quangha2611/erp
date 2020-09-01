<?php

namespace Modules\Assets\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Modules\Assets\Entities\Asset;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        Asset::query()->truncate();

        Asset::insert([
            ['id'=>1, 'companyId'=>1, 'categoryId'=>1, 'name'=>'Tài sản 1', 'code'=>'ts1', 'originalValue'=>1000000, 'quantity'=>1, 'deviceStatus'=>1, 'boughtDate'=> '2020-01-11', 'manufactureDate'=>null, 'expiredDate'=>null, 'warrantyMonths'=>null, 'author'=>1],
            ['id'=>2, 'companyId'=>2, 'categoryId'=>1, 'name'=>'Tài sản 2', 'code'=>'ts2', 'originalValue'=>2000000, 'quantity'=>2, 'deviceStatus'=>1, 'boughtDate'=> '2020-02-12', 'manufactureDate'=>null, 'expiredDate'=>null, 'warrantyMonths'=>null, 'author'=>1],
            ['id'=>3, 'companyId'=>3, 'categoryId'=>1, 'name'=>'Tài sản 3', 'code'=>'ts3', 'originalValue'=>3000000, 'quantity'=>3, 'deviceStatus'=>1, 'boughtDate'=> '2020-03-13', 'manufactureDate'=>null, 'expiredDate'=>null, 'warrantyMonths'=>null, 'author'=>1],
            ['id'=>4, 'companyId'=>1, 'categoryId'=>1, 'name'=>'Tài sản 4', 'code'=>'ts4', 'originalValue'=>4000000, 'quantity'=>4, 'deviceStatus'=>1, 'boughtDate'=> '2020-04-14', 'manufactureDate'=>null, 'expiredDate'=>null, 'warrantyMonths'=>null, 'author'=>1],
            ['id'=>5, 'companyId'=>1, 'categoryId'=>1, 'name'=>'Tài sản 5', 'code'=>'ts5', 'originalValue'=>5000000, 'quantity'=>5, 'deviceStatus'=>1, 'boughtDate'=> '2020-05-15', 'manufactureDate'=>null, 'expiredDate'=>null, 'warrantyMonths'=>null, 'author'=>1],
            ['id'=>6, 'companyId'=>2, 'categoryId'=>1, 'name'=>'Tài sản 6', 'code'=>'ts6', 'originalValue'=>6000000, 'quantity'=>6, 'deviceStatus'=>1, 'boughtDate'=> '2020-06-16', 'manufactureDate'=>null, 'expiredDate'=>null, 'warrantyMonths'=>null, 'author'=>1],
        ]);
        
    }
}
