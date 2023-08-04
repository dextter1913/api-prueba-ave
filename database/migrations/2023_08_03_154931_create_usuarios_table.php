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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('documento')->comment('Documento de el cliente');
            $table->string('nombre')->comment('Nombre del cliente');
            $table->string('apellido')->comment('Apellido del cliente');
            $table->string('ciudad')->comment('Ciudad de residencia del cliente');
            $table->string('direccion')->comment('Direccion de vivienda del cliente');
            $table->string('celular')->comment('Celular del cliente');
            $table->text('documento_base64')->comment('base 64 de el documento de identidad del cliente');
            $table->string('correo')->comment('Correo electronico del cliente');
            $table->string('cliente_creado_por')->comment('Usuario de la persona que inserto el cliente');
            $table->string('cliente_eliminado_por')->comment('Usuario de la persona que elimino el cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
// CREATE TABLE IF NOT EXISTS `usuarios` (
//     `id` bigint unsigned NOT NULL AUTO_INCREMENT,
//     `documento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     `ciudad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     `celular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     `cedula_base64` text COLLATE utf8mb4_unicode_ci NOT NULL,
//     `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
//     PRIMARY KEY (`id`),
//     UNIQUE KEY `usuarios_correo_unique` (`correo`)