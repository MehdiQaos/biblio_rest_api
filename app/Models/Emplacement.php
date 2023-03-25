<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplacement extends Model
{
    use HasFactory;

    public function book() {
        return $this->hasOne(Book::class);
    }

    public static function getNewEmplacement() {
        $emplacement = self::where('empty', true)->first();
        $emplacement->empty = false;
        $emplacement->save();
        return $emplacement;
    }
}
