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
                'url' => 'C:\Users\Public\Pictures\Sample Pictures\Penguins',
                'product_id' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'url' => 'C:\Users\Public\Pictures\Sample Pictures\Lighthouse',
                'product_id' => 2,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
