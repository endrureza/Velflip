<?php

return [

    /*
    |
    | ----------------------------------------------------
    | Velflip Setting
    | ----------------------------------------------------
    |
    */

    "secret_key" => env('VELFLIP_SECRET_KEY', null),

    "auth_key" => env('VELFLIP_AUTH_KEY', null),

    "callback_url" => env('VELFLIP_CALLBACK_URL',null),

    "is_production" => env('VELFLIP_IS_PRODUCTION', false),

    "sandbox_base_url" => "https://sandbox.flip.id/api/v2",
    
    "production_base_url" => "https://big.flip.id/api/v2",

    "supported_banks" => [
        "mandiri",
        "bri",
        "bni",
        "bca",
        "bsm",
        "cimb",
        "muamalat",
        "danamon",
        "permata",
        "bii",
        "panin",
        "uob",
        "citibank",
        "dbs"
    ],
];