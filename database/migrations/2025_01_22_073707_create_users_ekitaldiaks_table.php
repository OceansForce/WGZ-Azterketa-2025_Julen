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
        Schema::create('ekitaldiak_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('id_ekitaldi'); 

            $table->primary(['user_id', 'id_ekitaldi'])    ; 

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_ekitaldi')->references('id')->on('ekitaldiaks')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekitaldiak_user');
    }
};
