<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            'id_city'=> 1,
            'name'=> 'Nhật Thành',
            'dob'=>'1990-11-11',
            'email'=> 'nhatthanh2012@gmail.com'
        ];
        DB::table('customer')-> insert($array);
    }
}
