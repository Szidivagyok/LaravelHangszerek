<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('instruments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNull();
            $table->string('description')->notNull();
            $table->string('brand')->notNull();
            $table->integer('price')->default(0);
            $table->integer('quantity')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('instruments');
    }
};