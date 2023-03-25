<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = [
            'Harry Potter' => [
                [
                    "title" => "Harry Potter and the Philosopher's Stone",
                    "isbn" => "978-0747532743",
                    "pages" => 223,
                    "release_date" => "1997-06-26",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "Harry Potter is a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his own."
                ],
                [
                    "title" => "Harry Potter and the Chamber of Secrets",
                    "isbn" => "978-0747538493",
                    "pages" => 251,
                    "release_date" => "1998-07-02",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "Harry returns to Hogwarts School of Witchcraft and Wizardry for his second year. However, a series of mysterious events occur and Harry must use his skills to solve the mystery."
                ],
                [
                    "title" => "Harry Potter and the Prisoner of Azkaban",
                    "isbn" => "978-0747542155",
                    "pages" => 317,
                    "release_date" => "1999-07-08",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "Harry returns to Hogwarts School of Witchcraft and Wizardry for his third year. However, a notorious criminal named Sirius Black has escaped from the wizarding prison Azkaban, and is believed to be after Harry."
                ],
                [
                    "title" => "Harry Potter and the Goblet of Fire",
                    "isbn" => "978-0747551003",
                    "pages" => 636,
                    "release_date" => "2000-07-08",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "Harry is mysteriously entered into the Triwizard Tournament, a dangerous competition between three wizarding schools. As the tournament unfolds, Harry must confront new challenges and a rising darkness."
                ],
                [
                    "title" => "Harry Potter and the Order of Phoenix",
                    "isbn" => "978-0747551003",
                    "pages" => 766,
                    "release_date" => "2003-06-21",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "As Lord Voldemort rises to power, Harry must convince the wizarding community of the Dark Lord's return and prepare for the inevitable war that follows."
                ],
                [
                    "title" => "Harry Potter and the Half-Blood Prince",
                    "isbn" => "978-0747581086",
                    "pages" => 607,
                    "release_date" => "2005-07-16",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "As Harry begins his sixth year at Hogwarts School of Witchcraft and Wizardry, he discovers a mysterious book marked as 'the property of the Half-Blood Prince'."
                ],
                [
                    "title" => "Harry Potter and the Deathly Hallows",
                    "isbn" => "978-0545010221",
                    "pages" => 759,
                    "release_date" => "2007-07-21",
                    "author" => "J.K. Rowling",
                    "genre" => "Fantasy",
                    "description" => "As Harry begins his sixth year at Hogwarts School of Witchcraft and Wizardry, he discovers a mysterious book marked as 'the property of the Half-Blood Prince'."
                ],
            ],
            'The Hunger Games' => [
                [
                    "title" => "The Hunger Games",
                    "isbn" => "978-0439023481",
                    "pages" => 374,
                    "release_date" => "2008-09-14",
                    "author" => "Suzanne Collins",
                    "genre" => "Science Fiction",
                    "description" => "In a post-apocalyptic North America, every year the Capitol selects one boy and one girl from each district to fight to the death in a televised competition called the Hunger Games. Katniss Everdeen volunteers to take her younger sister's place, and must fight for her life in the arena."
                ],
                [
                    "title" => "Catching Fire",
                    "isbn" => "978-0439023498",
                    "pages" => 391,
                    "release_date" => "2009-09-01",
                    "author" => "Suzanne Collins",
                    "genre" => "Science Fiction",
                    "description" => "Katniss and Peeta, the winners of the 74th Hunger Games, are forced to return to the arena for the Quarter Quell, a special edition of the Hunger Games held every 25 years. They must fight against other victors from previous games, and Katniss realizes that she has become a symbol of rebellion against the Capitol."
                ],
                [
                    "title" => "Mockingjay",
                    "isbn" => "978-0439023511",
                    "pages" => 390,
                    "release_date" => "2010-08-24",
                    "author" => "Suzanne Collins",
                    "genre" => "Science Fiction",
                    "description" => "Katniss becomes the face of the rebellion against the Capitol, and must lead the rebels to victory against President Snow and the Capitol's forces. However, she also has to confront her own personal demons and decide what kind of future she wants for herself and for Panem."
                ]
            ],
            'A Song of Ice and Fire' => [
                [
                    "title" => "A Game of Thrones",
                    "isbn" => "978-0553103540",
                    "pages" => 694,
                    "release_date" => "1996-08-06",
                    "author" => "George R. R. Martin",
                    "genre" => "Fantasy",
                    "description" => "In the Seven Kingdoms of Westeros, a civil war erupts after the death of King Robert Baratheon, and various noble houses compete for the Iron Throne. Meanwhile, an ancient evil threatens the northern border, and the long summer is coming to an end."
                ],
                [
                    "title" => "A Clash of Kings",
                    "isbn" => "978-0553108033",
                    "pages" => 768,
                    "release_date" => "1999-02-01",
                    "author" => "George R. R. Martin",
                    "genre" => "Fantasy",
                    "description" => "The war for the Iron Throne continues, and new contenders emerge to challenge the Lannisters and the Starks. Meanwhile, Daenerys Targaryen builds her power across the Narrow Sea, and the Night's Watch faces a new threat from beyond the Wall."
                ],
                [
                    "title" => "A Storm of Swords",
                    "isbn" => "978-0553106633",
                    "pages" => 973,
                    "release_date" => "2000-10-31",
                    "author" => "George R. R. Martin",
                    "genre" => "Fantasy",
                    "description" => "The war for the Iron Throne intensifies, and the casualties mount on all sides. Meanwhile, the Stark family suffers devastating losses, Daenerys Targaryen gains new allies and dragons, and Jon Snow faces a crucial choice."
                ],
                [
                    "title" => "A Feast for Crows",
                    "isbn" => "978-0553801507",
                    "pages" => 753,
                    "release_date" => "2005-11-08",
                    "author" => "George R. R. Martin",
                    "genre" => "Fantasy",
                    "description" => "After the events of A Storm of Swords, the Seven Kingdoms are in chaos, and the Lannisters, Tyrells, and Greyjoys jockey for power. Meanwhile, Cersei Lannister faces challenges to her authority, and new characters are introduced in the Iron Islands and the city of Braavos."
                ],
                [
                    "title" => "A Dance with Dragons",
                    "isbn" => "978-0553801477",
                    "pages" => 1056,
                    "release_date" => "2011-07-12",
                    "author" => "George R. R. Martin",
                    "genre" => "Fantasy",
                    "description" => "The war for the Iron Throne continues, and Daenerys Targaryen faces new challenges and choices in her quest to claim the throne. Meanwhile, Jon Snow becomes embroiled in the politics of the Night's Watch and the Wildlings, and the fate of the Stark family hangs in the balance."
                ]
            ],
            'The Lord Of The Rings' => [
                [
                    "title" => "The Fellowship of the Ring",
                    "isbn" => "978-0618346257",
                    "pages" => 432,
                    "release_date" => "1954-07-29",
                    "author" => "J. R. R. Tolkien",
                    "genre" => "Fantasy",
                    "description" => "The first book in the series follows Frodo Baggins, a hobbit tasked with destroying the One Ring, a powerful artifact created by the evil Sauron. Frodo sets out on a perilous journey with a group of companions, including the wizard Gandalf and the warrior Aragorn, to destroy the ring in the fires of Mount Doom."
                ],
                [
                    "title" => "The Two Towers",
                    "isbn" => "978-0618260584",
                    "pages" => 352,
                    "release_date" => "1954-11-11",
                    "author" => "J. R. R. Tolkien",
                    "genre" => "Fantasy",
                    "description" => "The second book follows Frodo and his companions as they continue their journey to destroy the One Ring. Meanwhile, another group of characters, including the hobbits Sam and Merry, fight against Sauron's forces in the war for Middle-earth."
                ],
                [
                    "title" => "The Return of the King",
                    "isbn" => "978-0618129119",
                    "pages" => 432,
                    "release_date" => "1955-10-20",
                    "author" => "J. R. R. Tolkien",
                    "genre" => "Fantasy",
                    "description" => "The third and final book sees the climax of the story as the various characters' fates are revealed. Frodo and Sam must make their way to Mount Doom to destroy the One Ring, while Aragorn leads the armies of Middle-earth in a final battle against Sauron's forces."
                ]
            ],
            'The Chronicles of Narnia' => [
                [
                    "title" => "The Lion, the Witch and the Wardrobe",
                    "isbn" => "978-0064471046",
                    "pages" => 208,
                    "release_date" => "1950-10-16",
                    "author" => "C. S. Lewis",
                    "genre" => "Fantasy",
                    "description" => "The first book in the series introduces four siblings - Peter, Susan, Edmund, and Lucy - who stumble upon a magical world called Narnia through a wardrobe. There, they join forces with the lion Aslan to defeat the evil White Witch and bring peace to the land."
                ],
                [
                    "title" => "Prince Caspian",
                    "isbn" => "978-0064471053",
                    "pages" => 240,
                    "release_date" => "1951-10-15",
                    "author" => "C. S. Lewis",
                    "genre" => "Fantasy",
                    "description" => "The second book in the series takes place years after the events of the first. The Pevensie siblings return to Narnia and team up with Prince Caspian to overthrow his evil uncle and restore him to the throne."
                ],
                [
                    "title" => "The Voyage of the Dawn Treader",
                    "isbn" => "978-0064471077",
                    "pages" => 256,
                    "release_date" => "1952-09-15",
                    "author" => "C. S. Lewis",
                    "genre" => "Fantasy",
                    "description" => "The third book follows Lucy, Edmund, and their cousin Eustace as they join Prince Caspian on a voyage to find the Seven Lords of Narnia. Along the way, they encounter dragons, sea serpents, and other dangers."
                ],
                [
                    "title" => "The Silver Chair",
                    "isbn" => "978-0064471091",
                    "pages" => 256,
                    "release_date" => "1953-09-07",
                    "author" => "C. S. Lewis",
                    "genre" => "Fantasy",
                    "description" => "The fourth book follows Eustace and his friend Jill Pole as they travel to Narnia to search for Prince Rilian, who has been missing for years. Their journey takes them to the underworld of Narnia, where they must battle the evil Queen of the Underland to rescue the prince."
                ],
                [
                    "title" => "The Horse and His Boy",
                    "isbn" => "978-0064471060",
                    "pages" => 224,
                    "release_date" => "1954-09-06",
                    "author" => "C. S. Lewis",
                    "genre" => "Fantasy",
                    "description" => "The fifth book in the series takes place during the events of the previous book. It follows the story of a boy named Shasta and his talking horse Bree as they journey to Narnia and uncover a plot to invade the land."
                ],
                [
                    "title" => "The Magician's Nephew",
                    "isbn" => "978-0064471107",
                    "pages" => 208,
                    "release_date" => "1955-05-02",
                    "author" => "C. S. Lewis",
                    "genre" => "Fantasy",
                    "description" => "The sixth book serves as a prequel takes place during the events of the previous book. It follows the story of a boy named Shasta and his talking horse Bree as they journey to Narnia and uncover a plot to invade the land."
                ]
            ],
            'The Divergent' => [
                [
                    "title" => "Divergent",
                    "isbn" => "978-0-06-202403-9",
                    "pages" => 487,
                    "release_date" => "2011-05-03",
                    "author" => "Veronica Roth",
                    "genre" => "Young adult fiction",
                    "description" => "In a dystopian Chicago, society is divided into five factions based on personality traits. When 16-year-old Beatrice Prior learns she is 'Divergent' and doesn't fit into any one faction, she uncovers a sinister plot to eliminate all Divergents."
                ],
                [
                    "title" => "Insurgent",
                    "isbn" => "978-0-06-202405-3",
                    "pages" => 525,
                    "release_date" => "2012-05-01",
                    "author" => "Veronica Roth",
                    "genre" => "Young adult fiction",
                    "description" => "After the events of 'Divergent', Tris and Four are on the run from the power-hungry Erudite elite. As they seek allies and answers, they uncover dangerous secrets about their society and the origins of the factions."
                ],
                [
                    "title" => "Allegiant",
                    "isbn" => "978-0-06-202406-0",
                    "pages" => 526,
                    "release_date" => "2013-10-22",
                    "author" => "Veronica Roth",
                    "genre" => "Young adult fiction",
                    "description" => "Tris and Four venture beyond the walls of Chicago to discover what lies beyond. They find a shocking truth about their society and its history that threatens everything they know and love."
                ]
            ],
            'The Maze Runner' => [
                [
                    "title" => "The Maze Runner",
                    "isbn" => "978-0-385-73794-4",
                    "pages" => 375,
                    "release_date" => "2009-10-06",
                    "author" => "James Dashner",
                    "genre" => "Science fiction",
                    "description" => "Thomas wakes up in a strange place with no memory of his past life, surrounded by a group of teenage boys who also have no memory of their past. They are trapped in a deadly maze and must work together to find a way out before it's too late."
                ],
                [
                    "title" => "The Scorch Trials",
                    "isbn" => "978-0-385-73875-0",
                    "pages" => 360,
                    "release_date" => "2010-09-18",
                    "author" => "James Dashner",
                    "genre" => "Science fiction",
                    "description" => "After escaping the maze, Thomas and the other survivors are taken to a facility where they learn the truth about the world they live in. They are then sent on a new mission to cross a scorching hot desert and reach a safe haven, but danger lurks at every turn."
                ],
                [
                    "title" => "The Death Cure",
                    "isbn" => "978-0-385-73877-4",
                    "pages" => 325,
                    "release_date" => "2011-10-11",
                    "author" => "James Dashner",
                    "genre" => "Science fiction",
                    "description" => "Thomas and his friends finally reach the heart of the organization responsible for the maze and the scorch trials. They discover shocking truths about their past and the world they live in, and must fight for their survival in a final showdown."
                ]
            ],
        ];

        foreach ($collections as $name => $books) {
            $newCollection = Collection::create([
                'name' => $name,
            ]);

            foreach ($books as $book) {
                $book['collection_id'] = $newCollection->id;
                Book::createBook($book);
            }
        }
    }
}
