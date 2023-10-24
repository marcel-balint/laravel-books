<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Author;

class Book extends Model
{
    use HasFactory;
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function reviews()
    {
        return $this->belongsTo(Book::class);
    }
}
