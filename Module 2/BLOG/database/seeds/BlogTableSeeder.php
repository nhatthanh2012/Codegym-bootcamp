<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'title'=>'new blog',	
            'content'=>'how to write a blog',	
            'writer'=> 'Khanh Vy',
            'commnent'=>'good job',	
        ]);
    }
}
