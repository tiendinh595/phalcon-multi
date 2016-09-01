<?php
error_reporting(E_ALL);
use Phalcon\Db\Adapter\Pdo\Mysql as Database;

class Application extends \Phalcon\Mvc\Application
{

    /**
     * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
     */
    protected function _registerServices()
    {

        $di = new \Phalcon\DI\FactoryDefault();

        $loader = new \Phalcon\Loader();

        /**
         * We're a registering a set of directories taken from the configuration file
         */
        $loader->registerDirs(
            array(
                __DIR__ . '/../apps/library/'
            )
        )->register();

        //Registering a router
        $di->set('router', function(){

            $router = new \Phalcon\Mvc\Router();

            $router->setDefaultModule("frontend");

            $router->add('/:module/:controller/:action', array(
                'module' => 1,
                'controller' => 2,
                'action' => 3,
            ));


            return $router;

        });
        /**
         * Read configuration
         */
        $config = require_once __DIR__ . "../../config/database.php";

        $di->set('db', function () use ($config) {
            return new Database(array(
                "host" => $config->database->host,
                "username" => $config->database->username,
                "password" => $config->database->password,
                "dbname" => $config->database->dbname
            ));
        });

        $di->set('config', function () use ($config) {
           return $config;
        });

        $this->setDI($di);
    }

    public function main()
    {

        $this->_registerServices();

        //Register the installed modules
        $this->registerModules(array(
            'frontend' => array(
                'className' => 'Multiple\Frontend\Module',
                'path' => '../apps/frontend/Module.php'
            ),
            'backend' => array(
                'className' => 'Multiple\Backend\Module',
                'path' => '../apps/backend/Module.php'
            )
        ));

        echo $this->handle()->getContent();
    }

}

/**
 * Include files from vendor
 */
//require __DIR__ . '../../vendor/autoload.php';

    // Settings Tracy Debugger
$debug = new \Phalcon\Debug();
$debug->listen();



/**
 * START APPLICATION
 */
$application = new Application();
$application->main();