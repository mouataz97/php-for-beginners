<?php 
    $books = [
        [
        'title' => 'mafati7 10 lnajat',
        'author' => 'Ibrahim Lfaqi',
        'releaseYear' => '2022'
        ],
        [
        'title' => 'fen ala moubalat',
        'author' => 'mark manson',
        'releaseYear' => '2021'
        ],
        [
        'title' => 'astor awamir linux',
        'author' => 'William E. Shotts Jr',
        'releaseYear' => '2020'
        ]
    ];

        $filterBooks = array_filter($books, function ($book) {
            return $book['author'] === 'Ibrahim Lfaqi';
        });
    ?>
    
