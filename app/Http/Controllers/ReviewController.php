<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{

    public function store(Request $request, $book_id)
    {
        // Retrieve the logged-in user
        $user = auth()->user();

        // Validate the form data
        $request->validate([
            'review' => 'required|min:5',
        ]);

        // Create a new review record
        $review = new Review();
        $review->user_id = $user->id;
        $review->book_id = $book_id;
        $review->text = $request->input('review');
        $review->save();

        return redirect()->route('book.show', ['book_id' => $book_id])->with('success', 'Review submitted successfully');
    }
}
