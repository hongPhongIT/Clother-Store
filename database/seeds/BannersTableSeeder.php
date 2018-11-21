<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(
                
        [
            [
                'content' => str_random(5),
                'url' => 'google.com.vn',
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'content' => str_random(5),
                'url' => 'google.com.vn',
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'content' => str_random(5),
                'url' => 'google.com.vn',
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]        
                
        );
    }
}
