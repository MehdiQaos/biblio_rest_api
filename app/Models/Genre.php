<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function books() {
        return $this->hasMany(Book::class);
    }

    public static function createGenre($genreName) {
        $genre = Genre::where('name', $genreName)->first();
        if (is_null($genre)) {
            $genre = Genre::create(['name' => $genreName]);
        }
        return $genre;
    }
}
