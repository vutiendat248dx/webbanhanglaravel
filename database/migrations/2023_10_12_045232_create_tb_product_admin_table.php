<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_product_admin', function (Blueprint $table) {
            $table->bigIncrements('pro_id');
            $table->unsignedBigInteger('cate_id');
            $table->string('name');
            $table->integer('price');
            $table->string('amounts')->nullable();
            $table->string('images')->nullable();
            $table->text('description');
            $table->foreign('cate_id')
                ->references('id')
                ->on('tb_category_admin')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_product_admin');
    }
};
