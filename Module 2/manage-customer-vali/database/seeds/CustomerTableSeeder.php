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
       
        $dataArr = [];
        for($i=0; $i<10; $i++)
        {
            array_push($dataArr, [
                'name' => str_random(10),
                'dob' => date("Y-m-d", mt_rand(1,time())),
                'email' => str_random(10).'@gmail.com',
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
        DB::table('customer')->insert($dataArr);
    }
    // }
    // DB::table('customer')->insert([
    //     'name' =>'thanh',
       
    //     'email' => 'thanh@gmail.com'
        
    // ]);
    // }
    
}
