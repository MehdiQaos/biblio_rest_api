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
}
