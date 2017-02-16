<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'PHP',
             'description' => 'Testez vos connaissances sur PHP'],
            ['name' => 'MySQL',
             'description' => 'Testez vos connaissances sur MySQL'],
        ]);
    }
}
