<?php
return function ($kirby, $pages, $page) {

    $alert = null;

    if ($kirby->request()->is('POST') && get('submit')) {

        // check the honeypot
        if (empty(get('website')) === false) {
            go($page->url());
            exit;
        }

        $data = [
            'lehrkraft'  => get('lehrkraft'),
        ];

        $rules = [
            'lehrkraft'  => ['required', 'minLength' => 3, 'maxLength' => 30],
        ];

        $messages = [
            'lehrkraft'  => 'Bitte einen gültigen Vor- und Nachnamen eingeben',
        ];

        // some of the data is invalid
        if ($invalid = invalid($data, $rules, $messages)) {
            $alert = $invalid;

            // the data is fine, let's send the email
        } else {
            try {
                $kirby->email([
                    'template' => 'wlanvoucher',
                    'from'     => esc($data['lehrkraft']),
                    'replyTo'  => esc($data['lehrkraft']),
                    'to'       => esc($data['lehrkraft']),
                    'subject'  => esc($data['lehrkraft']) . ' fordert ein neues Passwort an',
                    'data'     => [
                        'text'   => esc($data['lehrkraft']),
                        'sender' => esc($data['lehrkraft'])
                    ]
                ]);
            } catch (Exception $error) {
                if (option('debug')) :
                    $alert['error'] = 'The form could not be sent: <strong>' . $error->getMessage() . '</strong>';
                else :
                    $alert['error'] = 'The form could not be sent!';
                endif;
            }

            // no exception occurred, let's send a success message
            if (empty($alert) === true) {
                $success = 'Die Anfrage zum Zurücksetzen vom Passwort wurde gesendet.';
                $data = [];
            }
        }
    }

    return [
        'alert'   => $alert,
        'data'    => $data ?? false,
        'success' => $success ?? false
    ];
};
