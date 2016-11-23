<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
<<<<<<< HEAD
            'cookieValidationKey' => '5bkCkqqxtRyLhFtVu_eq6WHtSdcAOSpD',
=======
            'cookieValidationKey' => '1S1Ehdg8cuCaRP8wRxHozPtuWxxe8-Ep',
>>>>>>> 3874b29f26447399964dda52807b5a953761cf81
        ],
    ],
];

if (!YII_ENV_TEST) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
