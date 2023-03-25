<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author() {
        return $this->belongsTo(Author::class);
    }

    public function collection() {
        return $this->belongsTo(Collection::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function emplacement() {
        return $this->belongsTo(Emplacement::class);
    }

    public static function createBook($book) {
        $author = Author::createAuthor($book['author']);
        $genre = Genre::createGenre($book['genre']);
        $newEmplacement = Emplacement::getNewEmplacement();

        Book::create([
            'title' => $book['title'],
            'isbn' => $book['isbn'],
            'pages' => $book['pages'],
            'collection_id' => $book['collection_id'] ?? null,
            'release_date' => $book['release_date'],
            'author_id' => $author->id,
            'genre_id' => $genre->id,
            'emplacement_id' => $newEmplacement->id,
            'status' => 'available',
            'description' => $book['description'],
        ]);
    }
}
