<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('tasks')-> insert([
            'taskName'=>'do excercites',
            'description'=>'step by step',
            'person'=>'thanh'
        ]);
    }
}
