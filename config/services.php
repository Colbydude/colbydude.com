<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'bandsintown' => [
        'armature' => [
            'id' => '15467404',
            'name' => 'Armature (WA)',
            'api_key' => env('BANDSINTOWN_ARMATURE_KEY')
        ],
        'colbydude' => [
            'id' => '14591936',
            'name' => 'Colbydude',
            'api_key' => env('BANDSINTOWN_COLBYDUDE_KEY')
        ],
        'rppe' => [
            'id' => '15397193',
            'name' => 'Prog XP',
            'api_key' => env('BANDSINTOWN_RPPE_KEY')
        ]
    ],

    'cron' => [
        'key' => env('CRON_KEY'),
    ],

    'github' => [
        'token' => env('GITHUB_TOKEN'),
    ],

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'spotify' => [
        'artist_id' => env('SPOTIFY_ARTIST_ID'),
        'client_id' => env('SPOTIFY_CLIENT_ID'),
        'client_secret' => env('SPOTIFY_CLIENT_SECRET'),
    ],

];
