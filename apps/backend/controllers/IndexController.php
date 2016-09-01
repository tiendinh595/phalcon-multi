<?php

namespace Multiple\Backend\Controllers;

use Multiple\Backend\Models\Posts;

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        echo "<pre>";
        print_r(Posts::find());
        $this->view->disable();
    }


    function loginAction() {
        echo __METHOD__;
    }

}

