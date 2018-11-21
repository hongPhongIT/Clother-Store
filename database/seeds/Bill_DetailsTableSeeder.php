<?php

use Illuminate\Database\Seeder;

class Bill_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bill_details')->insert(
                
        [
            [
                'quantity' => '02',
                'size' => 'M',
                'product_id' => 1,
                'bill_id' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'quantity' => '01',
                'size' => 'L',
                'product_id' => 2,
                'bill_id' => 2,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'quantity' => '8',
                'size' => 'L',
                'product_id' => 3,
                'bill_id' => 3,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
