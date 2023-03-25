<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Emplacement;
use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                "title" => "The Midnight Library",
                "isbn" => "978-1529036305",
                "pages" => 304,
                "release_date" => "2020-08-13",
                "author" => "Matt Haig",
                "genre" => "Fiction",
                "description" => "The Midnight Library is a thought-provoking and uplifting novel about second chances. The story follows Nora Seed, who finds herself in a mysterious library that contains books representing all the lives she could have lived. She is given the opportunity to try out these different lives, in the hopes of finding one where she can be truly happy."
            ],
            [
                "title" => "Sapiens: A Brief History of Humankind",
                "isbn" => "978-0062316097",
                "pages" => 512,
                "release_date" => "2015-02-10",
                "author" => "Yuval Noah Harari",
                "genre" => "Non-Fiction",
                "description" => "Sapiens is a fascinating exploration of the history of human beings, from the emergence of Homo sapiens in Africa to the present day. Yuval Noah Harari weaves together science, history, and anthropology to create a compelling narrative that challenges many of our assumptions about the nature of human beings and the societies we have created."
            ],
            [
                "title" => "The Power of Now: A Guide to Spiritual Enlightenment",
                "isbn" => "978-1577314806",
                "pages" => 236,
                "release_date" => "2004-08-29",
                "author" => "Eckhart Tolle",
                "genre" => "Self-Help",
                "description" => "The Power of Now is a transformative guide to living in the present moment. Eckhart Tolle draws on his own experience of spiritual awakening to offer practical advice on how to break free from negative thought patterns and live in a state of inner peace and clarity. This book is a must-read for anyone seeking to improve their mental and emotional well-being."
            ],
            [
                "title" => "The Hunger Games",
                "isbn" => "978-0439023481",
                "pages" => 374,
                "release_date" => "2008-09-14",
                "author" => "Suzanne Collins",
                "genre" => "Science Fiction",
                "description" => "The Hunger Games is a thrilling novel set in a dystopian future where children are forced to fight to the death in a televised competition. The story follows 16-year-old Katniss Everdeen as she volunteers to take her younger sister's place in the Games and must navigate a dangerous arena filled with deadly traps and ruthless opponents."
            ],
            [
                "title" => "To Kill a Mockingbird",
                "isbn" => "978-0446310789",
                "pages" => 281,
                "release_date" => "1960-07-11",
                "author" => "Harper Lee",
                "genre" => "Fiction",
                "description" => "To Kill a Mockingbird is a classic novel set in the Deep South during the 1930s. The story follows young Scout Finch as she learns about racism and injustice in her community, particularly during the trial of a black man accused of a crime he did not commit. This powerful novel is a timeless exploration of themes such as empathy, courage, and the importance of standing up for what is right."
            ],
            [
                "title" => "The Alchemist",
                "isbn" => "978-0062315007",
                "pages" => 208,
                "release_date" => "2014-04-15",
                "author" => "Paulo Coelho",
                "genre" => "Fiction",
                "description" => "The Alchemist is a beautiful and inspiring novel about following your dreams. The story follows Santiago, a shepherd boy who dreams of treasure and sets out on a journey to find it. Along the way, he meets a series of wise and mysterious characters who help him discover the true meaning of life and love."
            ],
            [
                "title" => "Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones",
                "isbn" => "978-0735211292",
                "pages" => 320,
                "release_date" => "2018-10-16",
                "author" => "James Clear",
                "genre" => "Self-Help",
                "description" => "Atomic Habits is a practical and effective guide to building good habits and breaking bad ones. James Clear provides a clear framework for understanding how habits work and offers practical strategies for making small changes that can lead to big results over time. This book is a must-read for anyone looking to improve their personal or professional life."
            ],
            [
                "title" => "The Catcher in the Rye",
                "isbn" => "978-0316769488",
                "pages" => 240,
                "release_date" => "1991-05-01",
                "author" => "J.D. Salinger",
                "genre" => "Fiction",
                "description" => "The Catcher in the Rye is a classic novel that has captured the hearts of generations of readers. The story follows Holden Caulfield, a troubled teenager who has been expelled from his prep school and is wandering the streets of New York City. The novel is a powerful exploration of themes such as alienation, identity, and the struggle to find one's place in the world."
            ],
            [
                "title" => "1984",
                "isbn" => "978-0451524935",
                "pages" => 328,
                "release_date" => "1950-06-08",
                "author" => "George Orwell",
                "genre" => "Fiction",
                "description" => "1984 is a classic dystopian novel that explores themes of totalitarianism, censorship, and the dangers of government control. The story is set in a future society where individual freedom is nonexistent, and the government has complete control over every aspect of citizens' lives. This book is a warning about the dangers of political power and the importance of preserving individual freedom and democracy."
            ],
            [
                "title" => "The Hitchhiker's Guide to the Galaxy",
                "isbn" => "978-0345391803",
                "pages" => 208,
                "release_date" => "1995-05-23",
                "author" => "Douglas Adams",
                "genre" => "Science Fiction",
                "description" => "The Hitchhiker's Guide to the Galaxy is a hilarious and irreverent science fiction novel that has become a cult classic. The story follows the misadventures of an unwitting human named Arthur Dent, who is saved from the destruction of Earth by an alien friend named Ford Prefect. Together, they embark on a wild journey through space and time, encountering a host of strange and hilarious characters along the way."
            ],
            [
                "title" => "The Lean Startup: How Today's Entrepreneurs Use Continuous Innovation to Create Radically Successful Businesses",
                "isbn" => "978-0307887894",
                "pages" => 336,
                "release_date" => "2011-09-13",
                "author" => "Eric Ries",
                "genre" => "Business",
                "description" => "The Lean Startup is a groundbreaking book that has revolutionized the way entrepreneurs approach innovation and business. Eric Ries provides a practical framework for creating successful startups by focusing on continuous innovation, rapid experimentation"
            ],
        ];
        
        foreach($books as $book) {
            Book::createBook($book);
        }
    }
}
