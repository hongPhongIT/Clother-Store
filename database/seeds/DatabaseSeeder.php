<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsersTableSeeder::class);
       $this->call(CategoriesTableSeeder::class);
       $this->call(ProductsTableSeeder::class);
       $this->call(CommentsTableSeeder::class);
       $this->call(SizesTableSeeder::class);
       $this->call(Size_ProductTableSeeder::class);
       $this->call(BannersTableSeeder::class);
       $this->call(LocationsTableSeeder::class);
       $this->call(BillsTableSeeder::class);
       $this->call(Bill_DetailsTableSeeder::class);
       $this->call(Product_PhotosTableSeeder::class);
       $this->call(Price_UpdateTableSeeder::class);
       
    }
}
 