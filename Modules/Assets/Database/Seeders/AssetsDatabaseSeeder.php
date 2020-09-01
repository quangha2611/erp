<?php

namespace Modules\Assets\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Modules\Assets\Database\Seeders\AssetsTableSeeder;
use Modules\Assets\Database\Seeders\AssetsCategoryTableSeeder;
use Modules\Assets\Database\Seeders\AssetsStatusTableSeeder;

class AssetsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
 
        $this->call(AssetsTableSeeder::class);
        $this->call(AssetsCategoryTableSeeder::class);
        $this->call(AssetsStatusTableSeeder::class);
        
    }
}
