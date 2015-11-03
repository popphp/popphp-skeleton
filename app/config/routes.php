<?php

return [
    '/' => [
        'controller' => 'Skeleton\Controller\IndexController',
        'action'     => 'index',
        'default'    => true
    ],
    '/hello[/:name]' => [
        'controller' => 'Skeleton\Controller\IndexController',
        'action'     => 'hello'
    ]
];