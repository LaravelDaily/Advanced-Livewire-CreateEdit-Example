<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductProductTagPivotTable extends Migration
{
    public function up()
    {
        Schema::create('product_product_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id', 'product_id_fk_5766064')->references('id')->on('products')->onDelete('cascade');
            $table->unsignedBigInteger('product_tag_id');
            $table->foreign('product_tag_id', 'product_tag_id_fk_5766064')->references('id')->on('product_tags')->onDelete('cascade');
        });
    }
}
