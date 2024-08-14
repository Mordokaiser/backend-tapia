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
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->enum('model',['Redmi_Note_10','Redmi_Note_10_Pro','Redmi_Note_10_Pro_Max','Redmi_Note_10_5G'])->nullable();
            $table->enum('color',['gray','white','green','gold'])->nullable();
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->enum('store',['abcdin','paris','falabella','lider'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
