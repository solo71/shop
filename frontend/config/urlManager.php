<?php

/* @var array $params */
return  [
    'class' => 'yii\web\urlManager',
    'hostInfo' => $params['frontendHostInfo'],
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '' => 'site/index',
        '<_a:about|contact|signup|login|logout>' => 'site/<_a>',
        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>'=> '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<id:\d+>/<_a:[\w-]+' => '<_c>/<_a>',
    ],
];
/**
 * Created by PhpStorm.
 * User: solo77
 * Date: 23.10.17
 * Time: 22:56
 */