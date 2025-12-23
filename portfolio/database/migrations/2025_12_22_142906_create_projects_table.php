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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description');
            $table->longText('description');
            $table->json('technologies'); // Array de tecnologías: ['Laravel', 'Vue', 'Tailwind']
            $table->string('image')->nullable(); // Ruta de la imagen destacada
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->date('project_date')->nullable();
            $table->enum('status', ['published', 'draft'])->default('published');
            $table->integer('order')->default(0); // Para ordenar proyectos
            $table->boolean('featured')->default(false); // Proyecto destacado
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
