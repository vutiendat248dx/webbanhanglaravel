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
        Schema::create('tb_order_items_member', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('orderId');
            $table->integer('quantity');
            $table->float('total_price');
            $table->foreign('product_id')
                ->references('pro_id')
                ->on('tb_product_admin')
                ->onDelete('cascade');
            $table->foreign('orderId')
                ->references('id')
                ->on('tb_order_member')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order_items_member');
    }
};
