<?php

use Illuminate\Database\Seeder;

class Price_UpdateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('price_updates')->insert(
                
        [
            [
                'product_id' => 1,
                'unit_price' => 13000,
                'promotion_price' => 8000,
                'created_at' => NEW Datetime(),
                'created_at' => NEW Datetime(),
            ],
            
            [
                'product_id' => 2,
                'unit_price' => 15000,
                'promotion_price' => 8000,
                'created_at' => NEW Datetime(),
                'created_at' => NEW Datetime(),
            ],
            
            [
                'product_id' => 3,
                'unit_price' => 13000,
                'promotion_price' => 8000,
                'created_at' => NEW Datetime(),
                'created_at' => NEW Datetime(),
            ]
        ]        
                
        );
    }
}
