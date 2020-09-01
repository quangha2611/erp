<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CompanySeeder::class);

        //ASSETS
        $this->call(Modules\Assets\Database\Seeders\AssetsStatusTableSeeder::class);
        $this->call(Modules\Assets\Database\Seeders\AssetsDatabaseSeeder::class);
        $this->call(Modules\Assets\Database\Seeders\AssetsCategoryTableSeeder::class);

        //DOCUMENT
        $this->call(Modules\Document\Database\Seeders\DocumentCategoryTableSeeder::class);
        $this->call(Modules\Document\Database\Seeders\DocumentTableSeeder::class);

        //ACCOUNTING
        $this->call(Modules\Accounting\Database\Seeders\AccountingDatabaseSeeder::class);

    }
}
