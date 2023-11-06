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
        Schema::create('tb_order_member', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mem_id');
            $table->float('bill');
            $table->string('status');
            $table->string('payment_method');
            $table->foreign('mem_id')
                ->references('id')
                ->on('tb_member')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_order_member');
    }
};
