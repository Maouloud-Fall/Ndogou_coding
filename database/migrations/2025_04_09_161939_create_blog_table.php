<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTable extends Migration
{
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->id(); // Clé primaire auto-incrémentée
            $table->string('title'); // Titre du blog
            $table->text('content'); // Contenu du blog
            $table->string('author'); // Auteur du blog
            $table->timestamps(); // Colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog');
    }
}
