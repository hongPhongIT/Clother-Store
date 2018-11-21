<?php

use Illuminate\Database\Seeder;

class Product_PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        DB::table('product_photos')->insert(
                
        [
            [
                'url' => 'images/2018/1/10/b4.jpg',
                'product_id' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'url' => 'images/2018/1/10/b5.jpg',
                'product_id' => 2,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'url' => 'images/2018/1/10/b6.jpg',
                'product_id' => 3,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
