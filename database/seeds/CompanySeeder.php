<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::query()->truncate();

        Company::insert([
            ['id' => 1, 'name' => 'Công ty 1', 'address' => 'Địa chỉ công ty 1', 'author' => 1, 'status' => 1, 'parentId' => null, 'isDeleted' => false],
            ['id' => 2, 'name' => 'Công ty 2', 'address' => 'Địa chỉ công ty 2', 'author' => 1, 'status' => 1, 'parentId' => null, 'isDeleted' => false],
            ['id' => 3, 'name' => 'Công ty 3', 'address' => 'Địa chỉ công ty 3', 'author' => 1, 'status' => 1, 'parentId' => null, 'isDeleted' => false],
            ['id' => 4, 'name' => 'Công ty 1.1', 'address' => 'Địa chỉ công ty 1.1', 'author' => 1, 'status' => 1, 'parentId' => 1, 'isDeleted' => false],
            ['id' => 5, 'name' => 'Công ty 2.1', 'address' => 'Địa chỉ công ty 2.1', 'author' => 1, 'status' => 1, 'parentId' => 2, 'isDeleted' => false],
            ['id' => 6, 'name' => 'Công ty 2.1.1', 'address' => 'Địa chỉ công ty 2.1.1', 'author' => 1, 'status' => 1, 'parentId' => 5, 'isDeleted' => false],
            ['id' => 7, 'name' => 'Công ty 3.1', 'address' => 'Địa chỉ công ty 3.1', 'author' => 1, 'status' => 1, 'parentId' => 3, 'isDeleted' => false],
        ]);
    }
}
