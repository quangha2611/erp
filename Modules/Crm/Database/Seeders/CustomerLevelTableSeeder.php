<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\CustomerLevel;

class CustomerLevelTableSeeder extends Seeder
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
        CustomerLevel::query()->truncate();

        CustomerLevel::insert([
            ['id' => 1, 'code' => 'L1', 'name' => 'Level 1', 'parent_id' => null],
            ['id' => 2, 'code' => 'L2', 'name' => 'Level 2', 'parent_id' => null],
            ['id' => 3, 'code' => 'L3', 'name' => 'Level 3', 'parent_id' => null],
            ['id' => 4, 'code' => 'L4', 'name' => 'Level 4', 'parent_id' => null],
        ]);

        CustomerLevel::insert([
            ['id' => 5, 'code' => 'L1A', 'name' => 'Level 1A', 'parent_id' => 1],
            ['id' => 6, 'code' => 'L2A', 'name' => 'Level 2A', 'parent_id' => 2],
            ['id' => 7, 'code' => 'L3A', 'name' => 'Level 3A', 'parent_id' => 3],
            ['id' => 8, 'code' => 'L4A', 'name' => 'Level 4A', 'parent_id' => 4],
            ['id' => 9, 'code' => 'L1B', 'name' => 'Level 1B', 'parent_id' => 1],
        ]);
    }
}
