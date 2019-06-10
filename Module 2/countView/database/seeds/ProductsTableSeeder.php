<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name'=>'Product 1', 'description'=>'sản phẩm có mã số 1', 'price'=>'1.5', 'view_count'=>0],
            ['name'=>'Product 2', 'description'=>'sản phẩm có mã số 2', 'price'=>'2.9', 'view_count'=>0],
            ['name'=>'Product 3', 'description'=>'sản phẩm có mã số 3', 'price'=>'17.5', 'view_count'=>0]
        ];
        DB:: table('products')-> insert($array);
    }
}
