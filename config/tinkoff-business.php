<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel Tinkoff Business Api Client
    |--------------------------------------------------------------------------
    */

    'token' => env('TINKOFF_BUSINESS_TOKEN'),
    'sandboxToken' => env('TINKOFF_BUSINESS_SANDBOX_TOKEN', 'TinkoffOpenApiSandboxSecretToken'),
    'isSandbox' => env('TINKOFF_BUSINESS_IS_SANDBOX', false),
    'guzzleOptions' => []
];
