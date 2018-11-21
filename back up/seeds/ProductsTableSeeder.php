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
                'name' => 'Áo sơ mi nam',
                'description' => str_random(255),
                'unit_price' => 10000,
                'promotion_price' => 8000,
                'unit' => 'cai',
                'category_id' => 2,
                'is_delete' => 0,
                'created_at' => NEW DateTime(),
            ],
            
            [
                'name' => 'Quần jean của Thư',
                'description' => str_random(255),
                'unit_price' => 100000,
                'promotion_price' => 80000,
                'unit' => 'cai',
                'category_id' => 1,
                'is_delete' => 0,
                'created_at' => NEW DateTime(),
            ]
        ]                
        );
    }
}
