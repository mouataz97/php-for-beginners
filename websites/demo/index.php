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

        
        function filterByAuthor(array $items, string $key, string $value) {
            $filterBooks = [];
            foreach ($items as $item) {
                if ($item[$key] === $value) {
                    $filterBooks[] = $item;
                }
            }
            return $filterBooks;
        }
    ?>
    
