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
        // $this->call(UserSeeder::class);
        DB::table('companies')->insert([
            [
                'id' => 1,
                'name' => 'Công ty 1',
                'address' => 'Địa chỉ công ty 1',
                'created_by' => 'Đặng Quang Hà',
                'status' => 1,
                'parentId' => null,
            ],
            [
                'id' => 2,
                'name' => 'Công ty 2',
                'address' => 'Địa chỉ công ty 2',
                'created_by' => 'Đặng Quang Hà',
                'status' => 1,
                'parentId' => null,
            ],
            [
                'id' => 3,
                'name' => 'Công ty 3',
                'address' => 'Địa chỉ công ty 3',
                'created_by' => 'Đặng Quang Hà',
                'status' => 1,
                'parentId' => null,
            ],
            [
                'id' => 4,
                'name' => 'Công ty 1.1',
                'address' => 'Địa chỉ công ty 1.1',
                'created_by' => 'Đặng Quang Hà',
                'status' => 0,
                'parentId' => 1,
            ], 
            [
                'id' => 5,
                'name' => 'Công ty 2.1',
                'address' => 'Địa chỉ công ty 2.1',
                'created_by' => 'Đặng Quang Hà',
                'status' => 1,
                'parentId' => 2,
            ],  
            [
                'id' => 6,
                'name' => 'Công ty 1.1.1',
                'address' => 'Địa chỉ công ty 1.1.1',
                'created_by' => 'Đặng Quang Hà',
                'status' => 1,
                'parentId' => 4,
            ],      
        ]);
    }
}
