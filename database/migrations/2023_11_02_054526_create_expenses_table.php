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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->integer('number');
            $table->date('date');
            $table->string('to_whom');

            // Связываем поле "item_of_expenditure" с таблицей "item_of_expenditure"
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('item_of_expenditure');

            $table->double('summ', 15, 2);
            $table->string('document');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
