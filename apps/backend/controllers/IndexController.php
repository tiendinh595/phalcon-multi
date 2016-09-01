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

        if(!empty($_POST)) {
            $this->cookies->set('user', 'tien dinh', time()+9999);
            var_dump($this->cookies->has('user'));
            die();
        }

    }
}

