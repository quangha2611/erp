<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CrmDatabaseSeeder extends Seeder
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
        $this->call(CustomerTableSeeder::class);
        $this->call(ActionTableSeeder::class);
        $this->call(CustomerTypeTableSeeder::class);
        $this->call(CustomerLevelTableSeeder::class);
        $this->call(PhoneCallResultTableSeeder::class);
        $this->call(CustomerSourceTableSeeder::class);
        $this->call(CustomerMajorTableSeeder::class);
    }
}
