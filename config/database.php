<?php
return new \Phalcon\Config(array(
    'database' => array(
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'phalcon',
    ),
    'application' => array(
        'base_url' => 'http://localhost:8080/framework/test/phalcon-multi-module'
    )
));
