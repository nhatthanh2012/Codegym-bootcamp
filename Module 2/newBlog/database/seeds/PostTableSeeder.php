<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('post')-> insert([
            'title' => 'choice',
            'content' => 'Life is a chain of choice',
            'writer'=> 'Anna',
            'id_cate'=>'1',
        ]);
    }
}
