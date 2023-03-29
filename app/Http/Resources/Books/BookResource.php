<?php

namespace App\Http\Resources\Books;

use App\Http\Resources\Author\AuthorResource;
use App\Http\Resources\Collections\CollectionResource;
use App\Http\Resources\Genres\GenreResource;
use App\Models\Author;
use App\Models\Collection;
use App\Models\Genre;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'isbn' => $this->isbn,
            'pages' => $this->pages,
            'status' => $this->status,
            'description' => $this->description,
            'releaseDate' => $this->release_date,
            'emplacement' => $this->emplacement_id,
            'collection' => new CollectionResource(Collection::find($this->collection_id)),
            'genre' => new GenreResource(Genre::find($this->genre_id)),
            'author' => new AuthorResource(Author::find($this->author_id)),
        ];
    }
}
