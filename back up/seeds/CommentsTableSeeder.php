<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
               
        [
            [
                'comment' => str_random(255),
                'product_id' => 1,
                'user_id' => 1,
                'parentid' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ],
            
            [
                'comment' => str_random(255),
                'product_id' => 2,
                'user_id' => 2,
                'parentid' => 2,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
            ]
        ]                 
        );
    }
}
