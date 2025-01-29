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

        Schema::table('ekitaldiak_user', function (Blueprint $table) {
            // Primero eliminamos las claves foráneas para que se pueda eliminar la clave primaria
            $table->dropForeign(['user_id']);
            $table->dropForeign(['id_ekitaldi']);
        });

        Schema::table('ekitaldiak_user', function (Blueprint $table) {
            // Después podemos eliminar la clave primaria
            $table->dropPrimary();
        });

        Schema::table('ekitaldiak_user', function (Blueprint $table) {
            // Ahora si es necesario, podemos volver a agregar la clave primaria
            $table->primary(['user_id', 'id_ekitaldi']);

            // Reestablecemos las claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_ekitaldi')->references('id')->on('ekitaldiaks')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('ekitaldiak_user', function (Blueprint $table) {
            // Elimina las claves foráneas
            $table->dropForeign(['user_id']);
            $table->dropForeign(['id_ekitaldi']);

            // Elimina la clave primaria
            $table->dropPrimary();
        });
    }
};
