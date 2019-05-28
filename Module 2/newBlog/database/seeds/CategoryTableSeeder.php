<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('category')-> insert([
            'name_category' => 'Tự sự',
            'description' => 'viết theo cảm xúc',
        ]);
    }
}
