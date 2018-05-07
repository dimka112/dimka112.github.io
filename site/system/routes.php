<?php
$routes = [
    'home' => [
        'namespace' => 'controller\HomeController',
        'controller' => 'HomeController',
        'action'  => 'index'
    ],
    'page' => [
        'namespace' => 'controller\PageController',
        'controller' => 'PageController',
        'action'  => 'getPage',
        'slug'   =>  [
            'reg' => '/^[a-z0-9]{5,50}$/'
        ]
    ],
    'login' => [
        'namespace' => 'controller\LoginController',
        'controller' => 'LoginController',
        'action'  => 'index'
    ],
    'registration' => [
        'namespace' => 'controller\RegistrationController',
        'controller' => 'RegistrationController',
        'action'  => 'index'
    ],
];