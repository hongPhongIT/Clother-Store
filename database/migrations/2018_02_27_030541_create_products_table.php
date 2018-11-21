<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name',255);
            $table->longText('description');
            $table->float('unit_price', 8, 2);
            $table->float('promotion_price', 8, 2);
            $table->string('unit');
            $table->integer('category_id')->unsigned();
            $table->tinyInteger('is_delete')->default(1);
            $table->timestamps();
        });
        
        //Full text search 
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
