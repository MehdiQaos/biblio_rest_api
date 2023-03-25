<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    public function books() {
        return $this->hasMany(Book::class);
    }

    public static function createAuthor($authorName) {
        $author = Author::where('name', $authorName)->first();
        if (is_null($author)) {
            $author = Author::create(['name' => $authorName]);
        }
        return $author;
    }
}
