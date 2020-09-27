<?php

namespace Modules\Crm\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Crm\Entities\Product;

class ProductTableSeeder extends Seeder
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
        Product::query()->truncate();

        for ($i = 1; $i <= 20; $i++) {
            Product::insert([
                ['company_id' => rand(1,7), 'name' => 'Sản phẩm '.$i, 'price' => 100000*$i, 'vat' => '10', 'is_deleted' => 0]
            ]);
        }
    }
}
