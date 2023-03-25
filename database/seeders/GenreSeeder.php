<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookGenres = ["Mystery", "Romance", "Fantasy", "Horror", "Thriller", "Science Fiction", "Memoir", "Drama", "Comedy", "Action and Adventure", "Crime and Detective", "Biography", "Cookbooks", "Art and Photography", "Travel", "Religion and Spirituality", "Business and Finance", "Children", "Graphic Novels", "Science and Nature", "Sports and Fitness"];

        foreach ($bookGenres as $genre) {
            Genre::create([
                'name' => $genre
            ]);
        }
    }
}
