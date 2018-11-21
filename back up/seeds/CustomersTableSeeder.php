<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
                
        [
            [
                'name' => 'Đào',
                'address' => 'Quảng Bình',
                'phone' => 000000000,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'name' => 'Khánh',
                'address' => 'Quảng Trị',
                'phone' => 000000001,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'name' => 'Vừa',
                'address' => 'Quảng Tờ Rị',
                'phone' => 000000002,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
