<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('customers')-> insert([
            'fullname'=>'thanh',
            'dob'=> "2018-09-26",
            'email'=>'nhatthanh2012@gmail.com',
            'city_id'=>'1'
        ]);
    }
}
