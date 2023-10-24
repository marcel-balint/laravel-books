@extends('layouts.main', [
    'current_page' => 'home'
 ])
@section('content')

    <h1>Title of the page</h1>
    <p>We are the best online bookstore ever... </p>

    @foreach ($crime_books as $book)
    <div class="book">
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->price }}</p>
        {{-- <p>{{ $book->authors->pluck('name')->join(', ') }}</p> --}}
    </div>
    @endforeach

    @endsection