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
        Schema::create('ekitaldiaks', function (Blueprint $table) {
            $table->id();
            $table->string('izena'); // Campo para 'izena'
            $table->date('date'); // Campo para 'date' (de tipo fecha)
            $table->text('azalpena'); // Campo para 'azalpena' (de tipo texto)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ekitaldiaks');
    }
};
