<?php

use Illuminate\Database\Seeder;

class Size_ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('size_product')->insert(
                
        [
            [
                'product_id' => 2,
                'size_id' => 1,
                'quantity' => 5,
                'created_at' => NEW DateTime(),
            ],
            
            [
                'product_id' => 3,
                'size_id' => 3,
                'quantity' => 10,
                'created_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
