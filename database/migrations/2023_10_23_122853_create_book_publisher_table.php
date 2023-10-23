<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('book_publisher', function (Blueprint $table) {
            $table->id(); // Unsigned big integer, auto-increment, primary key
            $table->unsignedBigInteger('book_id');     // Foreign key to book table
            $table->unsignedBigInteger('publisher_id'); // Foreign key to publisher table

            // Define the unique index on the combination of book_id and publisher_id
            $table->unique(['book_id', 'publisher_id']);

            // Define foreign key constraints
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_publisher');
    }
};
