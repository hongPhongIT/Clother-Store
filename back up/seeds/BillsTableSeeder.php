<?php

use Illuminate\Database\Seeder;

class BillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bills')->insert(
                
        [
            [
                'total' => 100000,
                'payment' => 'Card',
                'quanlity' => 02,
                'customer_id' => 3,
                'is_shipping' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'total' => 0,
                'payment' => 'No',
                'quanlity' => 0,
                'customer_id' => 2,
                'is_shipping' => 0,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            
            [
                'total' => 100000,
                'payment' => 'Ở Nhà',
                'quanlity' => 02,
                'customer_id' => 1,
                'is_shipping' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
