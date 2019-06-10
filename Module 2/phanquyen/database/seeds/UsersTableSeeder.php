<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            ['name'=>'adminUser', 'email'=>'admin@gmail.com', 'password'=>bcrypt('admin'), 'admin'=> 1],
            ['name'=>'User', 'email'=>'user@gmail.com', 'password'=>bcrypt('user'), 'admin'=> 0]
        ];
        DB::table('users')-> insert($array);
    }
}
