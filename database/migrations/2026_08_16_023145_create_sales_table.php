<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('product_id');

            $table->foreign('product_id')
                ->references('id')
                ->on('kookuproducts')
                ->onDelete('cascade');

            $table->integer('quantity');
            $table->decimal('selling_price', 10, 2);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sales');
    }
};