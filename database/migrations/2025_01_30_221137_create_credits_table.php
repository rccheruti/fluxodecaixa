<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * 'date',
     * 'description',
     * 'value',
     * 'typeCash'
     */
    public function up(): void
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('description');
            $table->double('value');
            $table->text('typeCash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
