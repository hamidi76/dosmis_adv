<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=dosmis',
            'username' => 'root',
            'password' => 'root@power',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',            
            'useFileTransport' => false,//set this property to false to send mails to real email addresses
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'hamidi.gm@gmail.com',
                'password' => 'midimi276',
                'port' => 587,
                'encryption' => 'tls',
                'streamOptions' => [ 
                    'ssl' => [ 
                        //'allow_self_signed' => true,
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                    ],
                ]
            ],
        ],
    ],
];
