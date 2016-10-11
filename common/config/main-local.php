<?php
return [
    'components' => [
        //Db
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        //Email
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',            
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'noreplythanhle@gmail.com',
                'password' => '!@#noreply!@#',
                'port' => '587',
                'encryption' => 'tls',
            ],
            'useFileTransport' => false,
        ],
        // Login Social Facebook
        'authClientCollection' => [
            'class' => 'yii\authclient\Collection',
            'clients' => [
                'facebook' => [
                    'class' => 'yii\authclient\clients\Facebook',
                    'clientId' => '130855937379431',
                    'clientSecret' => '41a53c6af542ae93e4c680ee512e8cd6',
                    'title' => "Sign in using Facebook",
                ],
            // etc.
            ],
        ],
    ],
];
