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
        Schema::create('productos', function(Blueprint  $table){
            $table -> increments('idproducto');
            $table -> string('nombreproducto', 100);
            $table -> text('descripcion');
            $table -> float('precio');
            $table -> integer('cantidadinventario');
            $table -> rememberToken();
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('productos');
    }
};
