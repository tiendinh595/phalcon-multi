<?php
$router->add(
    '/home/([a-zA-Z]+)',
    [
        'module' => 'frontend',
        'controller'=>'index',
        'action'=>'index',
    ]
);