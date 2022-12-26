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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' =>[
        'api_key' => 'AIzaSyDNMaz0qxhapwtrtIr5syCRIIMjVLOmJOg',
        'auth_domain' => 'laravel-firebase-crud-6926c.firebaseapp.com',
        'database_url' => 'https://laravel-firebase-crud-6926c-default-rtdb.firebaseio.com/',
        'project_id' => 'laravel-firebase-crud-6926c',
        'storage_bucket' => 'laravel-firebase-crud-6926c.appspot.com',
        'messaging_sender_id' => '1018245521997',
        'app_id' => '1:1018245521997:web:e0f478eb19da704a93b204',
        'measurement_id'=> 'G-TC8KGZ455D',
    ],

];
