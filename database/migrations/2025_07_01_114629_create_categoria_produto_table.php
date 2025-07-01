<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categoria_produto', function (Blueprint $table) {
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
            $table->foreignId('produto_id')->constrained()->onDelete('cascade');

            $table->primary(['categoria_id', 'produto_id']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categoria_produto');
    }
};
