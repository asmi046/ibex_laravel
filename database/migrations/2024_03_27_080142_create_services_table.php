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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title')->comment('Название услуги');
            $table->string('slug')->comment('Слаг');
            $table->string('img')->nullable()->comment('Изображение');
            $table->text('short_description')->nullable()->comment('Описание услуги (краткое)');
            $table->text('description')->nullable()->comment('Описание услуги');
            $table->integer('order')->default(1)->comment('порядок');
            $table->string('seo_title')->nullable()->comment('SEO заголовок');
            $table->text('seo_description')->nullable()->comment('SEO описание');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
