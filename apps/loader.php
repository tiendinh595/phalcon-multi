<?php
/**
 * Created by PhpStorm.
 * User: TienDinh
 * Date: 9/5/2016
 * Time: 10:21 AM
 */

$loader = new \Phalcon\Loader();
$loader->registerNamespaces([
    'Multiple\Library' => dirname(__DIR__).'/library'
]);
$loader->registerFiles([
    dirname(__DIR__).'/library/Utils.php'
]);
$loader->registerDirs([
    dirname(__DIR__).'/library'
]);
$loader->register();