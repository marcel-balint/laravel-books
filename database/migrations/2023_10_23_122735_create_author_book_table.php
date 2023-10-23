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
        Schema::create('author_book', function (Blueprint $table) {
            $table->id(); // Unsigned big integer, auto-increment, primary key
            $table->unsignedBigInteger('author_id'); // Foreign key to author table
            $table->unsignedBigInteger('book_id');   // Foreign key to book table

            // Define the unique index on the combination of author_id and book_id
            $table->unique(['author_id', 'book_id']);

            // Define foreign key constraints
            $table->foreign('author_id')->references('id')->on('authors');
            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('author_book');
    }
};
