<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('name'); // Nom du contact
            $table->string('email'); // Email du contact
            $table->text('message'); // Message du contact
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
