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
        Schema::create('tecnical_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img')->comment('Картинка');
            $table->string('file', 500)->comment('Ссылка на файл');
            $table->string('type')->nullable()->comment('Подраздел');
            $table->string('title', 500)->comment('Анкор ссылки');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tecnical_documents');
    }
};
