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
        DB::table('categories')->insert(
                
        [
            [
                'name' => 'Quần',
                'description' => str_random(255),
                'parentid' => 1,
                'created_at' => NEW DateTime(),
            ],
            
            [
                'name' => 'Áo',
                'description' => str_random(255),
                'parentid' => 2,
                'created_at' => NEW DateTime(),
            ]
        ]
                
        );
    }
}
