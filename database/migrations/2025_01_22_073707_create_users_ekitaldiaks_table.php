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
        Schema::create('users_ekitaldiaks', function (Blueprint $table) {
            $table->unsignedBigInteger('id_users'); 
            $table->unsignedBigInteger('id_ekitaldi'); 

            $table->primary(['id_users', 'id_ekitaldi']); 

            $table->foreign('id_usersphp artisan migrate
')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_ekitaldi')->references('id')->on('ekitaldiaks')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_ekitaldiaks');
    }
};
