<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
Schema::create('kookuproducts', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->string('image')->nullable();
    $table->integer('quantity')->default(0);
    $table->decimal('price', 10, 2)->default(0);
    $table->decimal('tiktok_price', 10, 2)->default(0);
    $table->decimal('shopee_price', 10, 2)->default(0);
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('kookuproducts');
    }
};
