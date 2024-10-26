<?php

return [
    'default' => 'kanye',
    'sources' => [
        'kanye' => [
            'url' => 'https://api.kanye.rest',
            'class' => \App\Services\Sources\KanyeQuotesSource::class,
        ],
    ]
];
