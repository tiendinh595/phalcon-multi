<?php

/**
 * Created by PhpStorm.
 * User: TienDinh
 * Date: 9/5/2016
 * Time: 9:25 AM
 */
namespace Multiple\Frontend\Models;
class Posts extends \Phalcon\Mvc\Model
{
    public $id;
    public $content;
    public $name;
    public function getResource()
    {
        return "posts";
    }
}