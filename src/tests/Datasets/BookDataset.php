<?php
dataset('update Books', function () {
    return [
        [
            collect(
                [
                    'id' => 1,
                    'title' => 'Rerum illo ipsum non dolorum sequi.',
                    'publisher' => 'Hic nostrum est est cum.',
                    'genre' => 'non-fiction',
                    'publication_date' => 1978 - 04 - 02,
                    'word_count' => 40020,
                    'price' => 222
                ]
            ),
            [
                'id' => 1,
                'title' => 'Rerum illo ipsum non dolorum sequi.',
                'publisher' => 'Hic nostrum est est cum.',
                'genre' => 'non-fiction',
                'publication_date' => 1978 - 04 - 02,
                'word_count' => 40020,
                'price' => 222
            ]
        ],
    ];
});

dataset('get Books', function () {
    return [
        [
            collect(
                [[
                    'id' => 1,
                    'title' => 'Rerum illo ipsum non dolorum sequi.',
                    'publisher' => 'Hic nostrum est est cum.',
                    'genre' => 'non-fiction',
                    'publication_date' => 1978 - 04 - 02,
                    'word_count' => 40020,
                    'price' => 222
                ]]
            ),
            [[
                'id' => 1,
                'title' => 'Rerum illo ipsum non dolorum sequi.',
                'publisher' => 'Hic nostrum est est cum.',
                'genre' => 'non-fiction',
                'publication_date' => 1978 - 04 - 02,
                'word_count' => 40020,
                'price' => 222
            ]]
        ],
    ];
});
dataset('get one Book', function () {
    return [
        [
            collect(
                [
                    'id' => 1,
                    'title' => 'Rerum illo ipsum non dolorum sequi.',
                    'publisher' => 'Hic nostrum est est cum.',
                    'genre' => 'non-fiction',
                    'publication_date' => 1978 - 04 - 02,
                    'word_count' => 40020,
                    'price' => 222
                ]
            ),
            [
                'id' => 1,
                'title' => 'Rerum illo ipsum non dolorum sequi.',
                'publisher' => 'Hic nostrum est est cum.',
                'genre' => 'non-fiction',
                'publication_date' => 1978 - 04 - 02,
                'word_count' => 40020,
                'price' => 222
            ]
        ],
    ];
});
dataset('post Books', function () {
    $date = now()->toDateString();
    return [
        [
            [
                'title' => 'Rerum illo ipsum non dolorum sequi.',
                'publisher' => 'Hic nostrum est est cum.',
                'genre' => 'non-fiction',
                'publication_date' => $date,
                'word_count' => 40020,
                'price' => 222
            ],
            collect(
                [
                    'id' => 1,
                    'title' => 'Rerum illo ipsum non dolorum sequi.',
                    'publisher' => 'Hic nostrum est est cum.',
                    'genre' => 'non-fiction',
                    'publication_date' => $date,
                    'word_count' => 40020,
                    'price' => 222
                ]
            ),
            [
                'id' => 1,
                'title' => 'Rerum illo ipsum non dolorum sequi.',
                'publisher' => 'Hic nostrum est est cum.',
                'genre' => 'non-fiction',
                'publication_date' => $date,
                'word_count' => 40020,
                'price' => 222
            ]
        ],
    ];
});

dataset('patch Books', function () {
    $date = now()->toDateString();
    return [
        [
            [
                'title' => 'Rerum illo ipsum non dolorum sequi.',
            ],
            collect(
                [
                    'id' => 1,
                    'title' => 'Rerum illo ipsum non dolorum sequi.',
                    'publisher' => 'Hic nostrum est est cum.',
                    'genre' => 'non-fiction',
                    'publication_date' => $date,
                    'word_count' => 40020,
                    'price' => 222
                ]
            ),
            [
                'id' => 1,
                'title' => 'Rerum illo ipsum non dolorum sequi.',
                'publisher' => 'Hic nostrum est est cum.',
                'genre' => 'non-fiction',
                'publication_date' => $date,
                'word_count' => 40020,
                'price' => 222
            ]
        ],
    ];
});
