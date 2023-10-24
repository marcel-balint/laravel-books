@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p>Author: {{ $book->author }}</p>
        <!-- Other book details here -->

        @auth
            <h2>Add a Review</h2>
            <form method="POST" action="{{ route('book.review', ['book_id' => $book->id]) }}">
                @csrf
                <div class="form-group">
                    <label for="review">Your Review</label>
                    <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        @else
            <p><a href="{{ route('login') }}">Log in</a> to leave a review.</p>
        @endauth
    </div>
@endsection
