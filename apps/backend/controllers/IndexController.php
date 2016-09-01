<?php

namespace Multiple\Backend\Controllers;

use Multiple\Backend\Models\Posts;

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $this->view->disable();
    }

}

