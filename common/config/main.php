<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'vi',
    
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'urlManagerFrontend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => \Yii::getAlias('@urlImage'),
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'backup' => [
            'class' => 'demi\backup\Component',
            // The directory for storing backups files
            'backupsFolder' => dirname(dirname(__DIR__)) . '/backups', // <project-root>/backups
            // Directories that will be added to backup
            'directories' => [
                'uploads' => '@frontend/web/uploads',
            ],
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@approot/messages',
                    ]
                ]
        ],
        
    ],
    'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',
        'gridview' => [
            'class' => '\kartik\grid\Module'
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => []
        ],
    ]
];
