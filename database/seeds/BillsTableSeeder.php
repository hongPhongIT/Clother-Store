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
                'quanlity' => 8,
                'user_id' => 1,
                'status' => 'chua giao',
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                'address' => 'Quảng Bình',
                'phone' => '01638174525'
            ],
            
            [
                'total' => 0,
                'payment' => 'No',
                'quanlity' => 7,
                'user_id' => 2,
                'is_shipping' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                'address' => 'Quảng Trị',
                'phone' => '01632468469',
            ],
            
            
            [
                'total' => 100000,
                'payment' => 'Ở Nhà',
                'quanlity' => 02,
                'user_id' => 1,
                'is_shipping' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                'address' => 'Quảng Trị',
                'phone' => '01632468869',
            ]
        ]        
                
        );
    }
}
