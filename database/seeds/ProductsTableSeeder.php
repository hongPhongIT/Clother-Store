<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
                
        [
            [
                'name' => 'Áo sơ mi nữ',
                'description' => str_random(255),
                'unit' => 'cai',
                'category_id' => 2,
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'name' => 'Áo sơ mi nam',
                'description' => str_random(255),
                'unit' => 'cai',
                'category_id' => 2,
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'name' => 'Quần bó óng',
                'description' => str_random(255),
                'unit' => 'cai',
                'category_id' => 3,
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]                
        );
    }
}
