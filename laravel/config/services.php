<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

        'twitter' => [
    'client_id' => 'FRSn4KiB9HK4QmAXCBklzUr8T',
    'client_secret' => '0WHAY72PBM5tK0vdRM8CiqmQrZPHieNexQuALaza3XKg6cPskG',
    'redirect' => 'http://nameless-lake-2987.herokuapp.com/login/twitter',
  ],

  'facebook' => [
    'client_id' => '792281457545632',
    'client_secret' => '66a2751fc0da076b2ad5f49f51110551',
    'redirect' => 'http://nameless-lake-2987.herokuapp.com/login/facebook',
    ],
    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

];
