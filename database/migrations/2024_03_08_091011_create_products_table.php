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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fuel_type'); // Tipo de combustible
            $table->decimal('price_per_liter', 10, 2); // Precio por litro
            $table->integer('available_stock')->nullable(); // Stock disponible (puede ser nulo)
            $table->string('image')->nullable(); // Nombre de la imagen (puede ser nulo)
            $table->integer('status')->default(0); // Estado del producto (activo, inactivo, etc.)
            $table->unsignedBigInteger('registerby'); // Supongo que este campo es para el ID del usuario que registra el producto
            $table->foreign('registerby')->references('id')->on('users'); // Asocia el campo registerby con la tabla users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
