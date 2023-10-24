<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;



class BookController extends Controller
{
    public function show($book_id)
    {

        // Retrieve the book details based on the book_id
        $book = Book::find($book_id);
        dd($book);
        if (!$book) {
            // Handle the case when the book is not found
            abort(404);
        }

        // Return the view with the book details
        return view('books.show', compact('book'));
    }
}
