<?php

namespace Multiple\Frontend\Controllers;

use Multiple\Frontend\Models\Posts;
use Multiple\Library\Test;

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $name = $this->dispatcher->getParam('name');
        echo $name;
        $this->view->disable();
    }

    public function showAction()
    {
        set_include_path(implode(';', ['D:\xammp\htdocs\phalcon\phalcon-multi\library', get_include_path()]));
        $params = $this->dispatcher->getParam(0, ['striptags']);
        //$post = Posts::findFirst($params);
        new \Some();
        test();
        echo '<pre>';
        print_r(new Test());
        echo 1;
        $this->view->disable();
    }

}

