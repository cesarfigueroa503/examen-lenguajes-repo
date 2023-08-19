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
        Schema::create('_producto', function (Blueprint $table) {
            $table->id('idProducto');
            $table->string('descripcion', 50);
            $table->double('precio', 8, 2);
            $table->integer('stock');
            $table->boolean('pagaIsv');
            
            
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_producto');
    }
};
