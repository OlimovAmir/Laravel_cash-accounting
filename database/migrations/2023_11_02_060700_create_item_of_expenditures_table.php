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
        Schema::create('item_of_expenditures', function (Blueprint $table) {
            $table->id();
            $table->string('name');


            $table->unsignedBigInteger('contractors_id');
            $table->foreign('contractors_id')->references('id')->on('contractors_for_expenses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_of_expenditures');
    }
};
