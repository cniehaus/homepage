<?php

return [


    // Damit auf einem oeffentlichen Server das Panel ueberhaupt geht...
    'panel' => ['install' => true],

    // Damit bei Fehlern der Debugger angeht  
    'debug'  => true,

    // automatische URLs folgen der deuschen Sprache
    'slugs' => 'de',

    'email' => [
        'presets' => [
            'contact' => [
                'from'    => 'schulleitung@kgs-rastede.de',
                'subject' => 'Testemail von der neuen Homepage',
                'cc'      => 'ni@kgs-rastede.de',
                'body'    => 'Testinhalt der Mail'
            ],
            'transport' => [
                'type' => 'smtp',
                'host' => 'smtp.company.com',
                'port' => 465,
                'security' => true,
                'auth' => true,
                'username' => '...',
                'password' => '...'
            ]
        ]
    ]
];
