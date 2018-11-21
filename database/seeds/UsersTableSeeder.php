<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                'name' => 'thu',
                'email' => 'thu'.'@gmail.com',
                'password' => bcrypt('000000'),
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                ],
                
                [
                'name' => str_random(3),
                'email' => str_random(3).'@gmail.com',
                'password' => bcrypt('000000'),
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                ],
                
                [
                'name' => str_random(3),
                'email' => str_random(3).'@gmail.com',
                'password' => bcrypt('000000'),
                'is_delete' => 1,
                'created_at' => NEW DateTime(),
                'updated_at' => NEW DateTime(),
                ]
            ]
            
        );
    }
}
    